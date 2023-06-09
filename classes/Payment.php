<?php

class Payment
{
    //creating all the variables
    private String $cardNo;
    private String $expDate;
    private int $cvv;
    private CardType $cardType;

    /**
     * @param String $cardNo
     * @param String $expDate
     * @param int $cvv
     * @param CardType $cardType
     */
    public function __construct(string $cardNo, string $expDate, int $cvv, CardType $cardType)//constructor
    {
        $this->cardNo = $cardNo;
        $this->expDate = $expDate;
        $this->cvv = $cvv;
        $this->cardType = $cardType;
    }

    //getters and setters
    /**
     * @return String
     */
    public function getCardNo(): string
    {
        return $this->cardNo;
    }

    /**
     * @param String $cardNo
     */
    public function setCardNo(string $cardNo): void
    {
        $this->cardNo = $cardNo;
    }

    /**
     * @return String
     */
    public function getExpDate(): string
    {
        return $this->expDate;
    }

    /**
     * @param String $expDate
     */
    public function setExpDate(string $expDate): void
    {
        $this->expDate = $expDate;
    }

    /**
     * @return int
     */
    public function getCvv(): int
    {
        return $this->cvv;
    }

    /**
     * @param int $cvv
     */
    public function setCvv(int $cvv): void
    {
        $this->cvv = $cvv;
    }

    /**
     * @return CardType
     */
    public function getCardType(): CardType
    {
        return $this->cardType;
    }

    /**
     * @param CardType $cardType
     */
    public function setCardType(CardType $cardType): void
    {
        $this->cardType = $cardType;
    }

}