<?php 

class Reservation {
    private int $id;
    private Client $client;
    private Cat $cat;
    private Table $table;
    private DateTime $dateTime;

    public function __construct($c, $ca, $t, $d){
        $this->client = $c;
        $this->cat = $ca;
        $this->table = $t;
        $this->dateTime = $d;
    }
    /**
     * Get the value of id
     *
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @param int $id
     *
     * @return self
     */
    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of client
     *
     * @return Client
     */
    public function getClient(): Client
    {
        return $this->client;
    }

    /**
     * Set the value of client
     *
     * @param Client $client
     *
     * @return self
     */
    public function setClient(Client $client): self
    {
        $this->client = $client;

        return $this;
    }

    /**
     * Get the value of cat
     *
     * @return Cat
     */
    public function getCat(): Cat
    {
        return $this->cat;
    }

    /**
     * Set the value of cat
     *
     * @param Cat $cat
     *
     * @return self
     */
    public function setCat(Cat $cat): self
    {
        $this->cat = $cat;

        return $this;
    }

    /**
     * Get the value of table
     *
     * @return Table
     */
    public function getTable(): Table
    {
        return $this->table;
    }

    /**
     * Set the value of table
     *
     * @param Table $table
     *
     * @return self
     */
    public function setTable(Table $table): self
    {
        $this->table = $table;

        return $this;
    }

    /**
     * Get the value of dateTime
     *
     * @return DateTime
     */
    public function getDateTime(): DateTime
    {
        return $this->dateTime;
    }

    /**
     * Set the value of dateTime
     *
     * @param DateTime $dateTime
     *
     * @return self
     */
    public function setDateTime(DateTime $dateTime): self
    {
        $this->dateTime = $dateTime;

        return $this;
    }
}

?>