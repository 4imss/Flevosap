<?php

class ProductModel extends BaseModel
{
    private int $id;
    private string $name, $description;
    private float $price;

    public function __construct()
    {
    parent::__construct();
    }

    public function exists()
    {
        return isset($this->id);
    }

    public function all()
    {
        if ($stmt = $this->pdo->prepare('select id, name, description, price from products'))
        {
            $stmt->execute();
            return $stmt->fetchAll();
        }
    }

    public function find($id)
    {
        if ($stmt = $this->pdo->prepare('select id, name, description, price from products WHERE id = :id'))
        {
            $stmt->bindParam(":id", $id);
            $stmt->execute();
            if($product = $stmt->fetch())
            {
                $this->id = $product['id'];
                $this->name = $product['name'];
                $this->description = $product['description'];
                $this->price = $product['price'];
            }
        }
    }

    public function getImage($id)
    {
        if ($stmt = $this->pdo->prepare('SELECT data, filetype FROM images INNER JOIN products p on images.id = p.imageId WHERE p.id = :id'))
        {
            $stmt->bindParam(":id", $id);
            $stmt->execute();

            if($image = $stmt->fetch())
            {
                $result = new stdClass();
                $result->data = $image['data'];
                $result->filetype = $image['filetype'];
                return $result;
            }
            else
            {
                return false;
            }
        }
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
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
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * @param float $price
     */
    public function setPrice(float $price): void
    {
        $this->price = $price;
    }
}
