<?php

namespace Salable\SDK\Models;

use Microsoft\Kiota\Abstractions\Serialization\ComposedTypeWrapper;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\ParseNodeHelper;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Composed type wrapper for classes string, UpdateCartRequestSchema_currencyMember1
*/
class UpdateCartRequestSchema_currency implements ComposedTypeWrapper, Parsable 
{
    /**
     * @var string|null $string Composed type representation for type string
    */
    private ?string $string = null;
    
    /**
     * @var UpdateCartRequestSchema_currencyMember1|null $updateCartRequestSchema_currencyMember1 Composed type representation for type UpdateCartRequestSchema_currencyMember1
    */
    private ?UpdateCartRequestSchema_currencyMember1 $updateCartRequestSchema_currencyMember1 = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UpdateCartRequestSchema_currency
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UpdateCartRequestSchema_currency {
        $result = new UpdateCartRequestSchema_currency();
        if ($parseNode->getStringValue() !== null) {
            $result->setString($parseNode->getStringValue());
        } else {
            $result->setUpdateCartRequestSchemaCurrencyMember1(new UpdateCartRequestSchema_currencyMember1());
        }
        return $result;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        if ($this->getUpdateCartRequestSchemaCurrencyMember1() !== null) {
            return ParseNodeHelper::mergeDeserializersForIntersectionWrapper($this->getUpdateCartRequestSchemaCurrencyMember1());
        }
        return [];
    }

    /**
     * Gets the string property value. Composed type representation for type string
     * @return string|null
    */
    public function getString(): ?string {
        return $this->string;
    }

    /**
     * Gets the UpdateCartRequestSchema_currencyMember1 property value. Composed type representation for type UpdateCartRequestSchema_currencyMember1
     * @return UpdateCartRequestSchema_currencyMember1|null
    */
    public function getUpdateCartRequestSchemaCurrencyMember1(): ?UpdateCartRequestSchema_currencyMember1 {
        return $this->updateCartRequestSchema_currencyMember1;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        if ($this->getString() !== null) {
            $writer->writeStringValue(null, $this->getString());
        } else {
            $writer->writeObjectValue(null, $this->getUpdateCartRequestSchemaCurrencyMember1());
        }
    }

    /**
     * Sets the string property value. Composed type representation for type string
     * @param string|null $value Value to set for the string property.
    */
    public function setString(?string $value): void {
        $this->string = $value;
    }

    /**
     * Sets the UpdateCartRequestSchema_currencyMember1 property value. Composed type representation for type UpdateCartRequestSchema_currencyMember1
     * @param UpdateCartRequestSchema_currencyMember1|null $value Value to set for the UpdateCartRequestSchema_currencyMember1 property.
    */
    public function setUpdateCartRequestSchemaCurrencyMember1(?UpdateCartRequestSchema_currencyMember1 $value): void {
        $this->updateCartRequestSchema_currencyMember1 = $value;
    }

}
