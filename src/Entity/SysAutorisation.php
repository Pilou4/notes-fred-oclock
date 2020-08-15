<?php

namespace App\Entity;

use App\Repository\SysAutorisationRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=SysAutorisationRepository::class)
 */
class SysAutorisation
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
    private $premier;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $deuxieme;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $troisieme;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $quatrieme;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $cinquieme;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $sixieme;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $septieme;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $huitieme;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $neuvieme;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $dixieme;

    /**
     * @ORM\ManyToOne(targetEntity=TerminalSys::class, inversedBy="autorisationId")
     */
    private $terminalId;

    /**
     * @ORM\ManyToOne(targetEntity=TerminalSys::class, inversedBy="auId")
     */
    private $terminalSys;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPremier(): ?string
    {
        return $this->premier;
    }

    public function setPremier(string $premier): self
    {
        $this->premier = $premier;

        return $this;
    }

    public function getDeuxieme(): ?string
    {
        return $this->deuxieme;
    }

    public function setDeuxieme(?string $deuxieme): self
    {
        $this->deuxieme = $deuxieme;

        return $this;
    }

    public function getTroisieme(): ?string
    {
        return $this->troisieme;
    }

    public function setTroisieme(?string $troisieme): self
    {
        $this->troisieme = $troisieme;

        return $this;
    }

    public function getQuatrieme(): ?string
    {
        return $this->quatrieme;
    }

    public function setQuatrieme(?string $quatrieme): self
    {
        $this->quatrieme = $quatrieme;

        return $this;
    }

    public function getCinquieme(): ?string
    {
        return $this->cinquieme;
    }

    public function setCinquieme(?string $cinquieme): self
    {
        $this->cinquieme = $cinquieme;

        return $this;
    }

    public function getSixieme(): ?string
    {
        return $this->sixieme;
    }

    public function setSixieme(?string $sixieme): self
    {
        $this->sixieme = $sixieme;

        return $this;
    }

    public function getSeptieme(): ?string
    {
        return $this->septieme;
    }

    public function setSeptieme(?string $septieme): self
    {
        $this->septieme = $septieme;

        return $this;
    }

    public function getHuitieme(): ?string
    {
        return $this->huitieme;
    }

    public function setHuitieme(?string $huitieme): self
    {
        $this->huitieme = $huitieme;

        return $this;
    }

    public function getNeuvieme(): ?string
    {
        return $this->neuvieme;
    }

    public function setNeuvieme(?string $neuvieme): self
    {
        $this->neuvieme = $neuvieme;

        return $this;
    }

    public function getDixieme(): ?string
    {
        return $this->dixieme;
    }

    public function setDixieme(?string $dixieme): self
    {
        $this->dixieme = $dixieme;

        return $this;
    }

    public function getTerminalId(): ?TerminalSys
    {
        return $this->terminalId;
    }

    public function setTerminalId(?TerminalSys $terminalId): self
    {
        $this->terminalId = $terminalId;

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
