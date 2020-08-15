<?php

namespace App\Entity;

use App\Repository\TerminalSysRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TerminalSysRepository::class)
 */
class TerminalSys
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
    private $name;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $signification;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $fonction;

    /**
     * @ORM\OneToMany(targetEntity=SysAutorisation::class, mappedBy="terminalId")
     */
    private $autorisationId;

    /**
     * @ORM\OneToMany(targetEntity=SysOption::class, mappedBy="trId")
     */
    private $optionId;

    /**
     * @ORM\OneToMany(targetEntity=SysUtil::class, mappedBy="termId")
     */
    private $utilId;

    /**
     * @ORM\OneToMany(targetEntity=SysOption::class, mappedBy="terminalSys")
     */
    private $opId;

    /**
     * @ORM\OneToMany(targetEntity=SysUtil::class, mappedBy="terminalSys")
     */
    private $utId;

    /**
     * @ORM\OneToMany(targetEntity=SysAutorisation::class, mappedBy="terminalSys")
     */
    private $auId;

    public function __construct()
    {
        $this->autorisationId = new ArrayCollection();
        $this->optionId = new ArrayCollection();
        $this->utilId = new ArrayCollection();
        $this->opId = new ArrayCollection();
        $this->utId = new ArrayCollection();
        $this->auId = new ArrayCollection();
    }

  

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getSignification(): ?string
    {
        return $this->signification;
    }

    public function setSignification(?string $signification): self
    {
        $this->signification = $signification;

        return $this;
    }

    public function getFonction(): ?string
    {
        return $this->fonction;
    }

    public function setFonction(string $fonction): self
    {
        $this->fonction = $fonction;

        return $this;
    }

    /**
     * @return Collection|SysAutorisation[]
     */
    public function getAutorisationId(): Collection
    {
        return $this->autorisationId;
    }

    public function addAutorisationId(SysAutorisation $autorisationId): self
    {
        if (!$this->autorisationId->contains($autorisationId)) {
            $this->autorisationId[] = $autorisationId;
            $autorisationId->setTerminalId($this);
        }

        return $this;
    }

    public function removeAutorisationId(SysAutorisation $autorisationId): self
    {
        if ($this->autorisationId->contains($autorisationId)) {
            $this->autorisationId->removeElement($autorisationId);
            // set the owning side to null (unless already changed)
            if ($autorisationId->getTerminalId() === $this) {
                $autorisationId->setTerminalId(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|SysOption[]
     */
    public function getOptionId(): Collection
    {
        return $this->optionId;
    }

    public function addOptionId(SysOption $optionId): self
    {
        if (!$this->optionId->contains($optionId)) {
            $this->optionId[] = $optionId;
            $optionId->setTrId($this);
        }

        return $this;
    }

    public function removeOptionId(SysOption $optionId): self
    {
        if ($this->optionId->contains($optionId)) {
            $this->optionId->removeElement($optionId);
            // set the owning side to null (unless already changed)
            if ($optionId->getTrId() === $this) {
                $optionId->setTrId(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|SysUtil[]
     */
    public function getUtilId(): Collection
    {
        return $this->utilId;
    }

    public function addUtilId(SysUtil $utilId): self
    {
        if (!$this->utilId->contains($utilId)) {
            $this->utilId[] = $utilId;
            $utilId->setTermId($this);
        }

        return $this;
    }

    public function removeUtilId(SysUtil $utilId): self
    {
        if ($this->utilId->contains($utilId)) {
            $this->utilId->removeElement($utilId);
            // set the owning side to null (unless already changed)
            if ($utilId->getTermId() === $this) {
                $utilId->setTermId(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|SysOption[]
     */
    public function getOpId(): Collection
    {
        return $this->opId;
    }

    public function addOpId(SysOption $opId): self
    {
        if (!$this->opId->contains($opId)) {
            $this->opId[] = $opId;
            $opId->setTerminalSys($this);
        }

        return $this;
    }

    public function removeOpId(SysOption $opId): self
    {
        if ($this->opId->contains($opId)) {
            $this->opId->removeElement($opId);
            // set the owning side to null (unless already changed)
            if ($opId->getTerminalSys() === $this) {
                $opId->setTerminalSys(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|SysUtil[]
     */
    public function getUtId(): Collection
    {
        return $this->utId;
    }

    public function addUtId(SysUtil $utId): self
    {
        if (!$this->utId->contains($utId)) {
            $this->utId[] = $utId;
            $utId->setTerminalSys($this);
        }

        return $this;
    }

    public function removeUtId(SysUtil $utId): self
    {
        if ($this->utId->contains($utId)) {
            $this->utId->removeElement($utId);
            // set the owning side to null (unless already changed)
            if ($utId->getTerminalSys() === $this) {
                $utId->setTerminalSys(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|SysAutorisation[]
     */
    public function getAuId(): Collection
    {
        return $this->auId;
    }

    public function addAuId(SysAutorisation $auId): self
    {
        if (!$this->auId->contains($auId)) {
            $this->auId[] = $auId;
            $auId->setTerminalSys($this);
        }

        return $this;
    }

    public function removeAuId(SysAutorisation $auId): self
    {
        if ($this->auId->contains($auId)) {
            $this->auId->removeElement($auId);
            // set the owning side to null (unless already changed)
            if ($auId->getTerminalSys() === $this) {
                $auId->setTerminalSys(null);
            }
        }

        return $this;
    }

}
