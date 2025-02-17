<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * Resultados
 *
 * @ORM\Table(name="resultados")
 * @ORM\Entity
 */
class Resultados
{
    /**
     * @var string
     *
     * @ORM\Column(name="cod_op", type="string", length=5, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codOp;

    /**
     * @var string|null
     *
     * @ORM\Column(name="notap", type="decimal", precision=4, scale=2, nullable=true)
     */
    private $notap;

    /**
     * @var string|null
     *
     * @ORM\Column(name="notat", type="decimal", precision=4, scale=2, nullable=true)
     */
    private $notat;

    public function getCodOp(): ?string
    {
        return $this->codOp;
    }

    public function getNotap(): ?string
    {
        return $this->notap;
    }

    public function setNotap(?string $notap): static
    {
        $this->notap = $notap;

        return $this;
    }

    public function getNotat(): ?string
    {
        return $this->notat;
    }

    public function setNotat(?string $notat): static
    {
        $this->notat = $notat;

        return $this;
    }


}
