<?php

namespace Salable\SDK\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UpdateLineItemRequestSchemaToken implements Parsable 
{
    /**
     * @var bool|null $allowChangingQuantity The allowChangingQuantity property
    */
    private ?bool $allowChangingQuantity = null;
    
    /**
     * @var UpdateLineItemRequestSchemaToken_billingScheme|null $billingScheme The billingScheme property
    */
    private ?UpdateLineItemRequestSchemaToken_billingScheme $billingScheme = null;
    
    /**
     * @var UpdateLineItemRequestSchemaToken_intervalType|null $intervalType The intervalType property
    */
    private ?UpdateLineItemRequestSchemaToken_intervalType $intervalType = null;
    
    /**
     * @var bool|null $isActive The isActive property
    */
    private ?bool $isActive = null;
    
    /**
     * @var bool|null $isUnlimited The isUnlimited property
    */
    private ?bool $isUnlimited = null;
    
    /**
     * @var int|null $maxQuantity The maxQuantity property
    */
    private ?int $maxQuantity = null;
    
    /**
     * @var float|null $minQuantity The minQuantity property
    */
    private ?float $minQuantity = null;
    
    /**
     * @var string|null $name The name property
    */
    private ?string $name = null;
    
    /**
     * @var string|null $nickname The nickname property
    */
    private ?string $nickname = null;
    
    /**
     * @var string|null $priceType The priceType property
    */
    private ?string $priceType = null;
    
    /**
     * @var string|null $slug The slug property
    */
    private ?string $slug = null;
    
    /**
     * @var UpdateLineItemRequestSchemaToken_tiersMode|null $tiersMode The tiersMode property
    */
    private ?UpdateLineItemRequestSchemaToken_tiersMode $tiersMode = null;
    
    /**
     * @var int|null $tokenExpiryDays The tokenExpiryDays property
    */
    private ?int $tokenExpiryDays = null;
    
    /**
     * @var int|null $tokenQuantity The tokenQuantity property
    */
    private ?int $tokenQuantity = null;
    
    /**
     * @var UpdateLineItemRequestSchemaToken_tokenResetBehaviour|null $tokenResetBehaviour The tokenResetBehaviour property
    */
    private ?UpdateLineItemRequestSchemaToken_tokenResetBehaviour $tokenResetBehaviour = null;
    
    /**
     * @var string|null $tokenSlug The tokenSlug property
    */
    private ?string $tokenSlug = null;
    
    /**
     * Instantiates a new UpdateLineItemRequestSchemaToken and sets the default values.
    */
    public function __construct() {
        $this->setAllowChangingQuantity(false);
        $this->setIsActive(true);
        $this->setIsUnlimited(false);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UpdateLineItemRequestSchemaToken
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UpdateLineItemRequestSchemaToken {
        return new UpdateLineItemRequestSchemaToken();
    }

    /**
     * Gets the allowChangingQuantity property value. The allowChangingQuantity property
     * @return bool|null
    */
    public function getAllowChangingQuantity(): ?bool {
        return $this->allowChangingQuantity;
    }

    /**
     * Gets the billingScheme property value. The billingScheme property
     * @return UpdateLineItemRequestSchemaToken_billingScheme|null
    */
    public function getBillingScheme(): ?UpdateLineItemRequestSchemaToken_billingScheme {
        return $this->billingScheme;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'allowChangingQuantity' => fn(ParseNode $n) => $o->setAllowChangingQuantity($n->getBooleanValue()),
            'billingScheme' => fn(ParseNode $n) => $o->setBillingScheme($n->getEnumValue(UpdateLineItemRequestSchemaToken_billingScheme::class)),
            'intervalType' => fn(ParseNode $n) => $o->setIntervalType($n->getEnumValue(UpdateLineItemRequestSchemaToken_intervalType::class)),
            'isActive' => fn(ParseNode $n) => $o->setIsActive($n->getBooleanValue()),
            'isUnlimited' => fn(ParseNode $n) => $o->setIsUnlimited($n->getBooleanValue()),
            'maxQuantity' => fn(ParseNode $n) => $o->setMaxQuantity($n->getIntegerValue()),
            'minQuantity' => fn(ParseNode $n) => $o->setMinQuantity($n->getFloatValue()),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            'nickname' => fn(ParseNode $n) => $o->setNickname($n->getStringValue()),
            'priceType' => fn(ParseNode $n) => $o->setPriceType($n->getStringValue()),
            'slug' => fn(ParseNode $n) => $o->setSlug($n->getStringValue()),
            'tiersMode' => fn(ParseNode $n) => $o->setTiersMode($n->getObjectValue([UpdateLineItemRequestSchemaToken_tiersMode::class, 'createFromDiscriminatorValue'])),
            'tokenExpiryDays' => fn(ParseNode $n) => $o->setTokenExpiryDays($n->getIntegerValue()),
            'tokenQuantity' => fn(ParseNode $n) => $o->setTokenQuantity($n->getIntegerValue()),
            'tokenResetBehaviour' => fn(ParseNode $n) => $o->setTokenResetBehaviour($n->getObjectValue([UpdateLineItemRequestSchemaToken_tokenResetBehaviour::class, 'createFromDiscriminatorValue'])),
            'tokenSlug' => fn(ParseNode $n) => $o->setTokenSlug($n->getStringValue()),
        ];
    }

    /**
     * Gets the intervalType property value. The intervalType property
     * @return UpdateLineItemRequestSchemaToken_intervalType|null
    */
    public function getIntervalType(): ?UpdateLineItemRequestSchemaToken_intervalType {
        return $this->intervalType;
    }

    /**
     * Gets the isActive property value. The isActive property
     * @return bool|null
    */
    public function getIsActive(): ?bool {
        return $this->isActive;
    }

    /**
     * Gets the isUnlimited property value. The isUnlimited property
     * @return bool|null
    */
    public function getIsUnlimited(): ?bool {
        return $this->isUnlimited;
    }

    /**
     * Gets the maxQuantity property value. The maxQuantity property
     * @return int|null
    */
    public function getMaxQuantity(): ?int {
        return $this->maxQuantity;
    }

    /**
     * Gets the minQuantity property value. The minQuantity property
     * @return float|null
    */
    public function getMinQuantity(): ?float {
        return $this->minQuantity;
    }

    /**
     * Gets the name property value. The name property
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Gets the nickname property value. The nickname property
     * @return string|null
    */
    public function getNickname(): ?string {
        return $this->nickname;
    }

    /**
     * Gets the priceType property value. The priceType property
     * @return string|null
    */
    public function getPriceType(): ?string {
        return $this->priceType;
    }

    /**
     * Gets the slug property value. The slug property
     * @return string|null
    */
    public function getSlug(): ?string {
        return $this->slug;
    }

    /**
     * Gets the tiersMode property value. The tiersMode property
     * @return UpdateLineItemRequestSchemaToken_tiersMode|null
    */
    public function getTiersMode(): ?UpdateLineItemRequestSchemaToken_tiersMode {
        return $this->tiersMode;
    }

    /**
     * Gets the tokenExpiryDays property value. The tokenExpiryDays property
     * @return int|null
    */
    public function getTokenExpiryDays(): ?int {
        return $this->tokenExpiryDays;
    }

    /**
     * Gets the tokenQuantity property value. The tokenQuantity property
     * @return int|null
    */
    public function getTokenQuantity(): ?int {
        return $this->tokenQuantity;
    }

    /**
     * Gets the tokenResetBehaviour property value. The tokenResetBehaviour property
     * @return UpdateLineItemRequestSchemaToken_tokenResetBehaviour|null
    */
    public function getTokenResetBehaviour(): ?UpdateLineItemRequestSchemaToken_tokenResetBehaviour {
        return $this->tokenResetBehaviour;
    }

    /**
     * Gets the tokenSlug property value. The tokenSlug property
     * @return string|null
    */
    public function getTokenSlug(): ?string {
        return $this->tokenSlug;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('allowChangingQuantity', $this->getAllowChangingQuantity());
        $writer->writeEnumValue('billingScheme', $this->getBillingScheme());
        $writer->writeEnumValue('intervalType', $this->getIntervalType());
        $writer->writeBooleanValue('isActive', $this->getIsActive());
        $writer->writeBooleanValue('isUnlimited', $this->getIsUnlimited());
        $writer->writeIntegerValue('maxQuantity', $this->getMaxQuantity());
        $writer->writeFloatValue('minQuantity', $this->getMinQuantity());
        $writer->writeStringValue('name', $this->getName());
        $writer->writeStringValue('nickname', $this->getNickname());
        $writer->writeStringValue('priceType', $this->getPriceType());
        $writer->writeStringValue('slug', $this->getSlug());
        $writer->writeObjectValue('tiersMode', $this->getTiersMode());
        $writer->writeIntegerValue('tokenExpiryDays', $this->getTokenExpiryDays());
        $writer->writeIntegerValue('tokenQuantity', $this->getTokenQuantity());
        $writer->writeObjectValue('tokenResetBehaviour', $this->getTokenResetBehaviour());
        $writer->writeStringValue('tokenSlug', $this->getTokenSlug());
    }

    /**
     * Sets the allowChangingQuantity property value. The allowChangingQuantity property
     * @param bool|null $value Value to set for the allowChangingQuantity property.
    */
    public function setAllowChangingQuantity(?bool $value): void {
        $this->allowChangingQuantity = $value;
    }

    /**
     * Sets the billingScheme property value. The billingScheme property
     * @param UpdateLineItemRequestSchemaToken_billingScheme|null $value Value to set for the billingScheme property.
    */
    public function setBillingScheme(?UpdateLineItemRequestSchemaToken_billingScheme $value): void {
        $this->billingScheme = $value;
    }

    /**
     * Sets the intervalType property value. The intervalType property
     * @param UpdateLineItemRequestSchemaToken_intervalType|null $value Value to set for the intervalType property.
    */
    public function setIntervalType(?UpdateLineItemRequestSchemaToken_intervalType $value): void {
        $this->intervalType = $value;
    }

    /**
     * Sets the isActive property value. The isActive property
     * @param bool|null $value Value to set for the isActive property.
    */
    public function setIsActive(?bool $value): void {
        $this->isActive = $value;
    }

    /**
     * Sets the isUnlimited property value. The isUnlimited property
     * @param bool|null $value Value to set for the isUnlimited property.
    */
    public function setIsUnlimited(?bool $value): void {
        $this->isUnlimited = $value;
    }

    /**
     * Sets the maxQuantity property value. The maxQuantity property
     * @param int|null $value Value to set for the maxQuantity property.
    */
    public function setMaxQuantity(?int $value): void {
        $this->maxQuantity = $value;
    }

    /**
     * Sets the minQuantity property value. The minQuantity property
     * @param float|null $value Value to set for the minQuantity property.
    */
    public function setMinQuantity(?float $value): void {
        $this->minQuantity = $value;
    }

    /**
     * Sets the name property value. The name property
     * @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->name = $value;
    }

    /**
     * Sets the nickname property value. The nickname property
     * @param string|null $value Value to set for the nickname property.
    */
    public function setNickname(?string $value): void {
        $this->nickname = $value;
    }

    /**
     * Sets the priceType property value. The priceType property
     * @param string|null $value Value to set for the priceType property.
    */
    public function setPriceType(?string $value): void {
        $this->priceType = $value;
    }

    /**
     * Sets the slug property value. The slug property
     * @param string|null $value Value to set for the slug property.
    */
    public function setSlug(?string $value): void {
        $this->slug = $value;
    }

    /**
     * Sets the tiersMode property value. The tiersMode property
     * @param UpdateLineItemRequestSchemaToken_tiersMode|null $value Value to set for the tiersMode property.
    */
    public function setTiersMode(?UpdateLineItemRequestSchemaToken_tiersMode $value): void {
        $this->tiersMode = $value;
    }

    /**
     * Sets the tokenExpiryDays property value. The tokenExpiryDays property
     * @param int|null $value Value to set for the tokenExpiryDays property.
    */
    public function setTokenExpiryDays(?int $value): void {
        $this->tokenExpiryDays = $value;
    }

    /**
     * Sets the tokenQuantity property value. The tokenQuantity property
     * @param int|null $value Value to set for the tokenQuantity property.
    */
    public function setTokenQuantity(?int $value): void {
        $this->tokenQuantity = $value;
    }

    /**
     * Sets the tokenResetBehaviour property value. The tokenResetBehaviour property
     * @param UpdateLineItemRequestSchemaToken_tokenResetBehaviour|null $value Value to set for the tokenResetBehaviour property.
    */
    public function setTokenResetBehaviour(?UpdateLineItemRequestSchemaToken_tokenResetBehaviour $value): void {
        $this->tokenResetBehaviour = $value;
    }

    /**
     * Sets the tokenSlug property value. The tokenSlug property
     * @param string|null $value Value to set for the tokenSlug property.
    */
    public function setTokenSlug(?string $value): void {
        $this->tokenSlug = $value;
    }

}
