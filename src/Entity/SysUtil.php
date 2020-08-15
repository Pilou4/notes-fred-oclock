<?php

namespace App\Entity;

use App\Repository\SysUtilRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=SysUtilRepository::class)
 */
class SysUtil
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
    private $un;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $deux;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $trois;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $quatre;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $cinq;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $six;

    /**
     * @ORM\OneToMany(targetEntity=TerminalSys::class, mappedBy="utilId")
     */
    private $sysId;

    /**
     * @ORM\ManyToOne(targetEntity=TerminalSys::class, inversedBy="utilId")
     */
    private $termId;

    /**
     * @ORM\ManyToOne(targetEntity=TerminalSys::class, inversedBy="utId")
     */
    private $terminalSys;

    public function __construct()
    {
        $this->sysId = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUn(): ?string
    {
        return $this->un;
    }

    public function setUn(string $un): self
    {
        $this->un = $un;

        return $this;
    }

    public function getDeux(): ?string
    {
        return $this->deux;
    }

    public function setDeux(?string $deux): self
    {
        $this->deux = $deux;

        return $this;
    }

    public function getTrois(): ?string
    {
        return $this->trois;
    }

    public function setTrois(?string $trois): self
    {
        $this->trois = $trois;

        return $this;
    }

    public function getQuatre(): ?string
    {
        return $this->quatre;
    }

    public function setQuatre(?string $quatre): self
    {
        $this->quatre = $quatre;

        return $this;
    }

    public function getCinq(): ?string
    {
        return $this->cinq;
    }

    public function setCinq(?string $cinq): self
    {
        $this->cinq = $cinq;

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

    /**
     * @return Collection|TerminalSys[]
     */
    public function getSysId(): Collection
    {
        return $this->sysId;
    }

    public function addSysId(TerminalSys $sysId): self
    {
        if (!$this->sysId->contains($sysId)) {
            $this->sysId[] = $sysId;
            $sysId->setUtilId($this);
        }

        return $this;
    }

    public function removeSysId(TerminalSys $sysId): self
    {
        if ($this->sysId->contains($sysId)) {
            $this->sysId->removeElement($sysId);
            // set the owning side to null (unless already changed)
            if ($sysId->getUtilId() === $this) {
                $sysId->setUtilId(null);
            }
        }

        return $this;
    }

    public function getTermId(): ?TerminalSys
    {
        return $this->termId;
    }

    public function setTermId(?TerminalSys $termId): self
    {
        $this->termId = $termId;

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
