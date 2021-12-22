<?php


class UserModel extends BaseModel
{
    // Define variables
    private int $klantId;
    private string $voornaam, $achternaam, $wachtwoord, $sex, $email, $telefoonnummer, $adres, $woonplaats, $postcode;
    private $createdAt;

    // Connect to the database
    public function __construct()
    {
        parent::__construct();
    }

    // Function to register new user
    public function registration(string $voornaam, string $achternaam, string $wachtwoord, string $sex, string $email, int $telefoonnummer, string $adres, string $woonplaats, string $postcode)
    {
        // Make a new query to insert
        $query = 'INSERT INTO users (voornaam, achternaam, wachtwoord, sex, email, telefoonnummer, adres, woonplaats, postcode) VALUES (:voornaam, :achternaam, :wachtwoord, :sex, :email, :telefoonnummer, :adres, :woonplaats, :postcode)';

        // Prepare and execute statement
        if ($stmt = $this->pdo->prepare($query)) :

            // Bind the paramaters
            $stmt->bindParam('voornaam', $voornaam, PDO::PARAM_STR);
            $stmt->bindParam('achternaam', $achternaam, PDO::PARAM_STR);
            $stmt->bindParam('wachtwoord', $wachtwoord, PDO::PARAM_STR);
            $stmt->bindParam('sex', $sex, PDO::PARAM_STR);
            $stmt->bindParam('email', $email, PDO::PARAM_STR);
            $stmt->bindParam('telefoonnummer', $telefoonnummer, PDO::PARAM_INT);
            $stmt->bindParam('adres', $adres, PDO::PARAM_STR);
            $stmt->bindParam('woonplaats', $woonplaats, PDO::PARAM_STR);
            $stmt->bindParam('postcode', $postcode, PDO::PARAM_STR);

            //execute statement
            $stmt->execute();

            //die(var_dump($stmt->errorInfo()));
        endif;
    }

    // login function for users
    public function login(string $email, string $wachtwoord)
    {
        // make a new query to insert
        $query = 'SELECT * FROM users WHERE email = :email AND wachtwoord = :wachtwoord';

        // prepare and execute statement
        if ($stmt = $this->pdo->prepare($query)) :

            // bind the paramaters
            $stmt->bindParam(':email', $email, PDO::PARAM_STR);
            $stmt->bindParam(':wachtwoord', $wachtwoord, PDO::PARAM_STR);

            // execute the statement
            $stmt->execute();
            if ($data = $stmt->fetch()) {
                $this->klantId = $data['klantId'];
                $this->voornaam = $data['voornaam'];
                $this->achternaam = $data['achternaam'];
                $this->wachtwoord = $data['wachtwoord'];
                $this->sex = $data['sex'];
                $this->email = $data['email'];
                $this->telefoonnummer = $data['telefoonnummer'];
                $this->adres = $data['adres'];
                $this->woonplaats = $data['woonplaats'];
                $this->postcode = $data['postcode'];
                $this->createdAt = $data['createdAt'];
            }
        endif;
    }

    // checks if user exists
    public function existsKlant(){
        return isset($this->klantId);
    }

    /**
     * @return int
     */
    public function getKlantId(): int
    {
        return $this->klantId;
    }

    /**
     * @param int $klantId
     */
    public function setKlantId(int $klantId): void
    {
        $this->klantId = $klantId;
    }

    /**
     * @return string
     */
    public function getVoornaam(): string
    {
        return $this->voornaam;
    }

    /**
     * @param string $voornaam
     */
    public function setVoornaam(string $voornaam): void
    {
        $this->voornaam = $voornaam;
    }

    /**
     * @return string
     */
    public function getAchternaam(): string
    {
        return $this->achternaam;
    }

    /**
     * @param string $achternaam
     */
    public function setAchternaam(string $achternaam): void
    {
        $this->achternaam = $achternaam;
    }

    /**
     * @return string
     */
    public function getWachtwoord(): string
    {
        return $this->wachtwoord;
    }

    /**
     * @param string $wachtwoord
     */
    public function setWachtwoord(string $wachtwoord): void
    {
        $this->wachtwoord = $wachtwoord;
    }

    /**
     * @return string
     */
    public function getSex(): string
    {
        return $this->sex;
    }

    /**
     * @param string $sex
     */
    public function setSex(string $sex): void
    {
        $this->sex = $sex;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getTelefoonnummer(): string
    {
        return $this->telefoonnummer;
    }

    /**
     * @param string $telefoonnummer
     */
    public function setTelefoonnummer(string $telefoonnummer): void
    {
        $this->telefoonnummer = $telefoonnummer;
    }

    /**
     * @return string
     */
    public function getAdres(): string
    {
        return $this->adres;
    }

    /**
     * @param string $adres
     */
    public function setAdres(string $adres): void
    {
        $this->adres = $adres;
    }

    /**
     * @return string
     */
    public function getWoonplaats(): string
    {
        return $this->woonplaats;
    }

    /**
     * @param string $woonplaats
     */
    public function setWoonplaats(string $woonplaats): void
    {
        $this->woonplaats = $woonplaats;
    }

    /**
     * @return string
     */
    public function getPostcode(): string
    {
        return $this->postcode;
    }

    /**
     * @param string $postcode
     */
    public function setPostcode(string $postcode): void
    {
        $this->postcode = $postcode;
    }

    /**
     * @return mixed
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @param mixed $createdAt
     */
    public function setCreatedAt($createdAt): void
    {
        $this->createdAt = $createdAt;
    }



}