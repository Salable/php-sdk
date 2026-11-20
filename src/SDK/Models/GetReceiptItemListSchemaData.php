<?php

namespace Salable\SDK\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class GetReceiptItemListSchemaData implements Parsable 
{
    /**
     * @var string|null $createdAt The createdAt property
    */
    private ?string $createdAt = null;
    
    /**
     * @var string|null $id The id property
    */
    private ?string $id = null;
    
    /**
     * @var string|null $lineItemStripeProductId The lineItemStripeProductId property
    */
    private ?string $lineItemStripeProductId = null;
    
    /**
     * @var string|null $organisation The organisation property
    */
    private ?string $organisation = null;
    
    /**
     * @var int|null $quantity The quantity property
    */
    private ?int $quantity = null;
    
    /**
     * @var string|null $receiptId The receiptId property
    */
    private ?string $receiptId = null;
    
    /**
     * @var string|null $updatedAt The updatedAt property
    */
    private ?string $updatedAt = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return GetReceiptItemListSchemaData
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): GetReceiptItemListSchemaData {
        return new GetReceiptItemListSchemaData();
    }

    /**
     * Gets the createdAt property value. The createdAt property
     * @return string|null
    */
    public function getCreatedAt(): ?string {
        return $this->createdAt;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'createdAt' => fn(ParseNode $n) => $o->setCreatedAt($n->getStringValue()),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'lineItemStripeProductId' => fn(ParseNode $n) => $o->setLineItemStripeProductId($n->getStringValue()),
            'organisation' => fn(ParseNode $n) => $o->setOrganisation($n->getStringValue()),
            'quantity' => fn(ParseNode $n) => $o->setQuantity($n->getIntegerValue()),
            'receiptId' => fn(ParseNode $n) => $o->setReceiptId($n->getStringValue()),
            'updatedAt' => fn(ParseNode $n) => $o->setUpdatedAt($n->getStringValue()),
        ];
    }

    /**
     * Gets the id property value. The id property
     * @return string|null
    */
    public function getId(): ?string {
        return $this->id;
    }

    /**
     * Gets the lineItemStripeProductId property value. The lineItemStripeProductId property
     * @return string|null
    */
    public function getLineItemStripeProductId(): ?string {
        return $this->lineItemStripeProductId;
    }

    /**
     * Gets the organisation property value. The organisation property
     * @return string|null
    */
    public function getOrganisation(): ?string {
        return $this->organisation;
    }

    /**
     * Gets the quantity property value. The quantity property
     * @return int|null
    */
    public function getQuantity(): ?int {
        return $this->quantity;
    }

    /**
     * Gets the receiptId property value. The receiptId property
     * @return string|null
    */
    public function getReceiptId(): ?string {
        return $this->receiptId;
    }

    /**
     * Gets the updatedAt property value. The updatedAt property
     * @return string|null
    */
    public function getUpdatedAt(): ?string {
        return $this->updatedAt;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('createdAt', $this->getCreatedAt());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeStringValue('lineItemStripeProductId', $this->getLineItemStripeProductId());
        $writer->writeStringValue('organisation', $this->getOrganisation());
        $writer->writeIntegerValue('quantity', $this->getQuantity());
        $writer->writeStringValue('receiptId', $this->getReceiptId());
        $writer->writeStringValue('updatedAt', $this->getUpdatedAt());
    }

    /**
     * Sets the createdAt property value. The createdAt property
     * @param string|null $value Value to set for the createdAt property.
    */
    public function setCreatedAt(?string $value): void {
        $this->createdAt = $value;
    }

    /**
     * Sets the id property value. The id property
     * @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value): void {
        $this->id = $value;
    }

    /**
     * Sets the lineItemStripeProductId property value. The lineItemStripeProductId property
     * @param string|null $value Value to set for the lineItemStripeProductId property.
    */
    public function setLineItemStripeProductId(?string $value): void {
        $this->lineItemStripeProductId = $value;
    }

    /**
     * Sets the organisation property value. The organisation property
     * @param string|null $value Value to set for the organisation property.
    */
    public function setOrganisation(?string $value): void {
        $this->organisation = $value;
    }

    /**
     * Sets the quantity property value. The quantity property
     * @param int|null $value Value to set for the quantity property.
    */
    public function setQuantity(?int $value): void {
        $this->quantity = $value;
    }

    /**
     * Sets the receiptId property value. The receiptId property
     * @param string|null $value Value to set for the receiptId property.
    */
    public function setReceiptId(?string $value): void {
        $this->receiptId = $value;
    }

    /**
     * Sets the updatedAt property value. The updatedAt property
     * @param string|null $value Value to set for the updatedAt property.
    */
    public function setUpdatedAt(?string $value): void {
        $this->updatedAt = $value;
    }

}
