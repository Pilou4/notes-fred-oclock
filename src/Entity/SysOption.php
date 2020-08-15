<?php

namespace App\Entity;

use App\Repository\SysOptionRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=SysOptionRepository::class)
 */
class SysOption
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $one;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $two;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $three;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $four;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $five;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $six;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $seven;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $eight;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $nine;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $ten;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $eleven;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $twelve;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $thirteen;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $fourteen;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $fiveteen;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $sixteen;

    /**
     * @ORM\ManyToOne(targetEntity=TerminalSys::class, inversedBy="optionId")
     */
    private $trId;

    /**
     * @ORM\ManyToOne(targetEntity=TerminalSys::class, inversedBy="opId")
     */
    private $terminalSys;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getOne(): ?string
    {
        return $this->one;
    }

    public function setOne(string $one): self
    {
        $this->one = $one;

        return $this;
    }

    public function getTwo(): ?string
    {
        return $this->two;
    }

    public function setTwo(?string $two): self
    {
        $this->two = $two;

        return $this;
    }

    public function getThree(): ?string
    {
        return $this->three;
    }

    public function setThree(?string $three): self
    {
        $this->three = $three;

        return $this;
    }

    public function getFour(): ?string
    {
        return $this->four;
    }

    public function setFour(?string $four): self
    {
        $this->four = $four;

        return $this;
    }

    public function getFive(): ?string
    {
        return $this->five;
    }

    public function setFive(?string $five): self
    {
        $this->five = $five;

        return $this;
    }

    public function getSix(): ?string
    {
        return $this->six;
    }

    public function setSix(?string $six): self
    {
        $this->six = $six;

        return $this;
    }

    public function getSeven(): ?string
    {
        return $this->seven;
    }

    public function setSeven(?string $seven): self
    {
        $this->seven = $seven;

        return $this;
    }

    public function getEight(): ?string
    {
        return $this->eight;
    }

    public function setEight(?string $eight): self
    {
        $this->eight = $eight;

        return $this;
    }

    public function getNine(): ?string
    {
        return $this->nine;
    }

    public function setNine(?string $nine): self
    {
        $this->nine = $nine;

        return $this;
    }

    public function getTen(): ?string
    {
        return $this->ten;
    }

    public function setTen(?string $ten): self
    {
        $this->ten = $ten;

        return $this;
    }

    public function getEleven(): ?string
    {
        return $this->eleven;
    }

    public function setEleven(?string $eleven): self
    {
        $this->eleven = $eleven;

        return $this;
    }

    public function getTwelve(): ?string
    {
        return $this->twelve;
    }

    public function setTwelve(?string $twelve): self
    {
        $this->twelve = $twelve;

        return $this;
    }

    public function getThirteen(): ?string
    {
        return $this->thirteen;
    }

    public function setThirteen(?string $thirteen): self
    {
        $this->thirteen = $thirteen;

        return $this;
    }

    public function getFourteen(): ?string
    {
        return $this->fourteen;
    }

    public function setFourteen(?string $fourteen): self
    {
        $this->fourteen = $fourteen;

        return $this;
    }

    public function getFiveteen(): ?string
    {
        return $this->fiveteen;
    }

    public function setFiveteen(?string $fiveteen): self
    {
        $this->fiveteen = $fiveteen;

        return $this;
    }

    public function getSixteen(): ?string
    {
        return $this->sixteen;
    }

    public function setSixteen(?string $sixteen): self
    {
        $this->sixteen = $sixteen;

        return $this;
    }

    public function getTrId(): ?TerminalSys
    {
        return $this->trId;
    }

    public function setTrId(?TerminalSys $trId): self
    {
        $this->trId = $trId;

        return $this;
    }

    public function getTerminalSys(): ?TerminalSys
    {
        return $this->terminalSys;
    }

    public function setTerminalSys(?TerminalSys $terminalSys): self
    {
        $this->terminalSys = $terminalSys;

        return $this;
    }
}
