<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use DateTimeInterface;
use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\Id;

/** A manufacturer */
#[ApiResource]
#[Entity]
class Manufacturer
{
    /** The id of the manufacturer */
    #[Id]
    #[GeneratedValue(strategy: "AUTO")]
    #[Column(type: "integer")]
    private ?int $id = null;

    /** The name of the manufacturer */
    #[Column(type: "string")]
    private string $name = '';

    /** The description of the manufacturer */
    #[Column(type: "text")]
    private string $description = '';

    /** The country code of the manufacturer */
    #[Column(type: "string", length: 3)]
    private string $countryCode = '';

    /** The date of the manufacturer */
    #[Column(type: "datetime")]
    private ?DateTimeInterface $listedDate = null;

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    /**
     * @return string
     */
    public function getCountryCode(): string
    {
        return $this->countryCode;
    }

    /**
     * @param string $countryCode
     */
    public function setCountryCode(string $countryCode): void
    {
        $this->countryCode = $countryCode;
    }

    /**
     * @return DateTimeInterface|null
     */
    public function getListedDate(): ?DateTimeInterface
    {
        return $this->listedDate;
    }

    /**
     * @param DateTimeInterface|null $listedDate
     */
    public function setListedDate(?DateTimeInterface $listedDate): void
    {
        $this->listedDate = $listedDate;
    }
}