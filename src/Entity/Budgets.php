<?php

namespace App\Entity;

use App\Repository\BudgetsRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=BudgetsRepository::class)
 */
class Budgets
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="text")
     */
    private $description;

    /**
     * @ORM\ManyToOne(targetEntity=EstimatedDate::class)
     */
    private $estimateddate;

    /**
     * @ORM\Column(type="integer")
     */
    private $category;

    /**
     * @ORM\Column(type="integer")
     */
    private $subcategory;

    /**
     * @ORM\ManyToOne(targetEntity=PricePreference::class)
     */
    private $pricepreference;

    /**
     * @ORM\ManyToOne(targetEntity=User::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $user;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $title;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getEstimatedDate(): ?EstimatedDate
    {
        return $this->estimateddate;
    }

    public function setEstimatedDate(?EstimatedDate $estimateddate): self
    {
        $this->estimateddate = $estimateddate;

        return $this;
    }

    public function getCategory(): ?int
    {
        return $this->category;
    }

    public function setCategory(int $category): self
    {
        $this->category = $category;

        return $this;
    }

    public function getSubcategory(): ?int
    {
        return $this->subcategory;
    }

    public function setSubcategory(int $subcategory): self
    {
        $this->subcategory = $subcategory;

        return $this;
    }

    public function getPricepreference(): ?PricePreference
    {
        return $this->pricepreference;
    }

    public function setPricepreference(?PricePreference $pricepreference): self
    {
        $this->pricepreference = $pricepreference;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

        return $this;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(?string $title): self
    {
        $this->title = $title;

        return $this;
    }
}
