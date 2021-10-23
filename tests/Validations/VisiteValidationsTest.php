<?php

namespace App\Tests\Validations;

use App\Entity\Visite;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;



class VisiteValidationsTest extends KernelTestCase{
    /**
     * Undocumented function
     *
     * @return Visite
     */
    public function getVisite(): Visite
    {
        return (new Visite())
            ->setVille("New York")
            ->setPays("USA");
    }

    public function testValidNoteVisite(){
        $visite = $this->getVisite()->setNote(10);
        $this->assertErrors($visite, 0);
    }

    public function testNonValidNoteVisite(){
        $visite = $this->getVisite()->setNote(21);
        $this->assertErrors($visite, 1);
    }


    public function testNonValisTempmaxVisite(){
        $visite = $this->getVisite()
            ->setTempmin(20)
            ->setTempmax(18);
        $this->assertErrors($visite, 1,"min=20, max=18 devrait échouer");
    }

    public function assertErrors(Visite $visite, int $nbErreursAttendues,
            string $message=""){
        self::bootKernel();
        $error = self::$container->get('validator')->validate($visite);
        $this->assertCount($nbErreursAttendues, $error, $message);

    }


}