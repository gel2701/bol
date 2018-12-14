<?php

// this file is auto-generated by prolic/fpp
// don't edit this file manually

declare(strict_types=1);

namespace BolCom\RetailerApi\Model\Commission;

final class Commission
{
    private $ean;
    private $condition;
    private $price;
    private $fixedAmount;
    private $percentage;
    private $totalCost;
    private $totalCostWithoutReduction;
    private $reduction;

    /**
     * @param \BolCom\RetailerApi\Model\Offer\Ean $ean
     * @param \BolCom\RetailerApi\Model\Offer\Condition $condition
     * @param \BolCom\RetailerApi\Model\CurrencyAmount $price
     * @param \BolCom\RetailerApi\Model\CurrencyAmount $fixedAmount
     * @param \BolCom\RetailerApi\Model\PercentageAmount $percentage
     * @param \BolCom\RetailerApi\Model\CurrencyAmount $totalCost
     * @param \BolCom\RetailerApi\Model\CurrencyAmount $totalCostWithoutReduction
     * @param \BolCom\RetailerApi\Model\Commission\CommissionReduction[] $reduction
     */
    public function __construct(\BolCom\RetailerApi\Model\Offer\Ean $ean, \BolCom\RetailerApi\Model\Offer\Condition $condition, ?\BolCom\RetailerApi\Model\CurrencyAmount $price, \BolCom\RetailerApi\Model\CurrencyAmount $fixedAmount, \BolCom\RetailerApi\Model\PercentageAmount $percentage, \BolCom\RetailerApi\Model\CurrencyAmount $totalCost, ?\BolCom\RetailerApi\Model\CurrencyAmount $totalCostWithoutReduction, ?array $reduction)
    {
        $this->ean = $ean;
        $this->condition = $condition;
        $this->price = $price;
        $this->fixedAmount = $fixedAmount;
        $this->percentage = $percentage;
        $this->totalCost = $totalCost;
        $this->totalCostWithoutReduction = $totalCostWithoutReduction;
        if ($reduction !== null) {
            $this->reduction = [];
            foreach ($reduction as $__value) {
                if (! $__value instanceof \BolCom\RetailerApi\Model\Commission\CommissionReduction) {
                    throw new \InvalidArgumentException('reduction expected an array of BolCom\RetailerApi\Model\Commission\CommissionReduction');
                }
                $this->reduction[] = $__value;
            }
        }
    }

    public function ean(): \BolCom\RetailerApi\Model\Offer\Ean
    {
        return $this->ean;
    }

    public function condition(): \BolCom\RetailerApi\Model\Offer\Condition
    {
        return $this->condition;
    }

    public function price(): ?\BolCom\RetailerApi\Model\CurrencyAmount
    {
        return $this->price;
    }

    public function fixedAmount(): \BolCom\RetailerApi\Model\CurrencyAmount
    {
        return $this->fixedAmount;
    }

    public function percentage(): \BolCom\RetailerApi\Model\PercentageAmount
    {
        return $this->percentage;
    }

    public function totalCost(): \BolCom\RetailerApi\Model\CurrencyAmount
    {
        return $this->totalCost;
    }

    public function totalCostWithoutReduction(): ?\BolCom\RetailerApi\Model\CurrencyAmount
    {
        return $this->totalCostWithoutReduction;
    }

    /**
     * @return \BolCom\RetailerApi\Model\Commission\CommissionReduction[]|null
     */
    public function reduction(): ?array
    {
        return $this->reduction;
    }

    public function withEan(\BolCom\RetailerApi\Model\Offer\Ean $ean): Commission
    {
        return new self($ean, $this->condition, $this->price, $this->fixedAmount, $this->percentage, $this->totalCost, $this->totalCostWithoutReduction, $this->reduction);
    }

    public function withCondition(\BolCom\RetailerApi\Model\Offer\Condition $condition): Commission
    {
        return new self($this->ean, $condition, $this->price, $this->fixedAmount, $this->percentage, $this->totalCost, $this->totalCostWithoutReduction, $this->reduction);
    }

    public function withPrice(?\BolCom\RetailerApi\Model\CurrencyAmount $price): Commission
    {
        return new self($this->ean, $this->condition, $price, $this->fixedAmount, $this->percentage, $this->totalCost, $this->totalCostWithoutReduction, $this->reduction);
    }

    public function withFixedAmount(\BolCom\RetailerApi\Model\CurrencyAmount $fixedAmount): Commission
    {
        return new self($this->ean, $this->condition, $this->price, $fixedAmount, $this->percentage, $this->totalCost, $this->totalCostWithoutReduction, $this->reduction);
    }

    public function withPercentage(\BolCom\RetailerApi\Model\PercentageAmount $percentage): Commission
    {
        return new self($this->ean, $this->condition, $this->price, $this->fixedAmount, $percentage, $this->totalCost, $this->totalCostWithoutReduction, $this->reduction);
    }

    public function withTotalCost(\BolCom\RetailerApi\Model\CurrencyAmount $totalCost): Commission
    {
        return new self($this->ean, $this->condition, $this->price, $this->fixedAmount, $this->percentage, $totalCost, $this->totalCostWithoutReduction, $this->reduction);
    }

    public function withTotalCostWithoutReduction(?\BolCom\RetailerApi\Model\CurrencyAmount $totalCostWithoutReduction): Commission
    {
        return new self($this->ean, $this->condition, $this->price, $this->fixedAmount, $this->percentage, $this->totalCost, $totalCostWithoutReduction, $this->reduction);
    }

    /**
     * @param \BolCom\RetailerApi\Model\Commission\CommissionReduction[] $reduction
     * @return \BolCom\RetailerApi\Model\Commission\Commission
     */
    public function withReduction(?array $reduction): Commission
    {
        return new self($this->ean, $this->condition, $this->price, $this->fixedAmount, $this->percentage, $this->totalCost, $this->totalCostWithoutReduction, $reduction);
    }

    public static function fromArray(array $data): Commission
    {
        if (! isset($data['ean']) || ! \is_string($data['ean'])) {
            throw new \InvalidArgumentException("Key 'ean' is missing in data array or is not a string");
        }

        $ean = \BolCom\RetailerApi\Model\Offer\Ean::fromString($data['ean']);

        if (! isset($data['condition']) || ! \is_string($data['condition'])) {
            throw new \InvalidArgumentException("Key 'condition' is missing in data array or is not a string");
        }

        $condition = \BolCom\RetailerApi\Model\Offer\Condition::fromValue($data['condition']);

        if (isset($data['price'])) {
            if (! \is_float($data['price']) && ! \is_int($data['price'])) {
                throw new \InvalidArgumentException("Value for 'price' is not a float in data array");
            }

            $price = \BolCom\RetailerApi\Model\CurrencyAmount::fromScalar($data['price']);
        } else {
            $price = null;
        }

        if (! isset($data['fixedAmount']) || (! \is_float($data['fixedAmount']) && ! \is_int($data['fixedAmount']))) {
            throw new \InvalidArgumentException("Key 'fixedAmount' is missing in data array or is not a float");
        }

        $fixedAmount = \BolCom\RetailerApi\Model\CurrencyAmount::fromScalar($data['fixedAmount']);

        if (! isset($data['percentage']) || (! \is_float($data['percentage']) && ! \is_int($data['percentage']))) {
            throw new \InvalidArgumentException("Key 'percentage' is missing in data array or is not a float");
        }

        $percentage = \BolCom\RetailerApi\Model\PercentageAmount::fromScalar($data['percentage']);

        if (! isset($data['totalCost']) || (! \is_float($data['totalCost']) && ! \is_int($data['totalCost']))) {
            throw new \InvalidArgumentException("Key 'totalCost' is missing in data array or is not a float");
        }

        $totalCost = \BolCom\RetailerApi\Model\CurrencyAmount::fromScalar($data['totalCost']);

        if (isset($data['totalCostWithoutReduction'])) {
            if (! \is_float($data['totalCostWithoutReduction']) && ! \is_int($data['totalCostWithoutReduction'])) {
                throw new \InvalidArgumentException("Value for 'totalCostWithoutReduction' is not a float in data array");
            }

            $totalCostWithoutReduction = \BolCom\RetailerApi\Model\CurrencyAmount::fromScalar($data['totalCostWithoutReduction']);
        } else {
            $totalCostWithoutReduction = null;
        }

        if (isset($data['reduction'])) {
            if (! \is_array($data['reduction'])) {
                throw new \InvalidArgumentException("Value for 'reduction' is not an array in data array");
            }

            $reduction = CommissionReduction::fromArray($data['reduction']);
        } else {
            $reduction = null;
        }

        return new self(
            $ean,
            $condition,
            $price,
            $fixedAmount,
            $percentage,
            $totalCost,
            $totalCostWithoutReduction,
            $reduction
        );
    }
}
