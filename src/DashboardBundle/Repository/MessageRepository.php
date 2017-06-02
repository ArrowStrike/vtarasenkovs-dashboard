<?php

namespace DashboardBundle\Repository;

use DashboardBundle\Interfaces\MessageRepositoryInterface;
use Doctrine\ORM\EntityRepository;


class MessageRepository extends EntityRepository implements MessageRepositoryInterface
{

    public function getMessages(\DateTime $datetime = null)
    {
        if ($datetime) {
            $datetime = $datetime->modify('- 60 minutes')->format('Y-m-d H:i:s');

            $em = $this->getEntityManager()->createQueryBuilder();
            $selectedMessages = $em
                ->select('m')
                ->from('DashboardBundle:Message', 'm')
                ->where('m.createdAt > :datetime')
                ->setParameter('datetime', $datetime)
                ->getQuery()
                ->getResult();


            return $selectedMessages;

        }

        return $this->findAll();
    }

    public function saveMessage($message)
    {
        $em = $this->getEntityManager();
        $em->persist($message);
        $em->flush();

        return;
    }

    public function deleteMessage($message = null)
    {
        $em = $this->getEntityManager();
        if ($message) {
            $em->remove($message);
            $em->flush();

            return true;
        } else {
            return false;
        }
    }
}
