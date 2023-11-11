<?php

namespace App\Entity;

use App\Repository\VinylSongsRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: VinylSongsRepository::class)]
class VinylSongs
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    public function getId(): ?int
    {
        return $this->id;
    }
}
