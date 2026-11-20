<?php

namespace Salable\SDK\Models;

use Microsoft\Kiota\Abstractions\Serialization\ComposedTypeWrapper;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\ParseNodeHelper;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Composed type wrapper for classes CreateCartItemRequestSchema_intervalMember1, string
*/
class CreateCartItemRequestSchema_interval implements ComposedTypeWrapper, Parsable 
{
    /**
     * @var CreateCartItemRequestSchema_intervalMember1|null $createCartItemRequestSchema_intervalMember1 Composed type representation for type CreateCartItemRequestSchema_intervalMember1
    */
    private ?CreateCartItemRequestSchema_intervalMember1 $createCartItemRequestSchema_intervalMember1 = null;
    
    /**
     * @var string|null $string Composed type representation for type string
    */
    private ?string $string = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CreateCartItemRequestSchema_interval
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CreateCartItemRequestSchema_interval {
        $result = new CreateCartItemRequestSchema_interval();
        if ($parseNode->getStringValue() !== null) {
            $result->setString($parseNode->getStringValue());
        } else {
            $result->setCreateCartItemRequestSchemaIntervalMember1(new CreateCartItemRequestSchema_intervalMember1());
        }
        return $result;
    }

    /**
     * Gets the CreateCartItemRequestSchema_intervalMember1 property value. Composed type representation for type CreateCartItemRequestSchema_intervalMember1
     * @return CreateCartItemRequestSchema_intervalMember1|null
    */
    public function getCreateCartItemRequestSchemaIntervalMember1(): ?CreateCartItemRequestSchema_intervalMember1 {
        return $this->createCartItemRequestSchema_intervalMember1;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        if ($this->getCreateCartItemRequestSchemaIntervalMember1() !== null) {
            return ParseNodeHelper::mergeDeserializersForIntersectionWrapper($this->getCreateCartItemRequestSchemaIntervalMember1());
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
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        if ($this->getString() !== null) {
            $writer->writeStringValue(null, $this->getString());
        } else {
            $writer->writeObjectValue(null, $this->getCreateCartItemRequestSchemaIntervalMember1());
        }
    }

    /**
     * Sets the CreateCartItemRequestSchema_intervalMember1 property value. Composed type representation for type CreateCartItemRequestSchema_intervalMember1
     * @param CreateCartItemRequestSchema_intervalMember1|null $value Value to set for the CreateCartItemRequestSchema_intervalMember1 property.
    */
    public function setCreateCartItemRequestSchemaIntervalMember1(?CreateCartItemRequestSchema_intervalMember1 $value): void {
        $this->createCartItemRequestSchema_intervalMember1 = $value;
    }

    /**
     * Sets the string property value. Composed type representation for type string
     * @param string|null $value Value to set for the string property.
    */
    public function setString(?string $value): void {
        $this->string = $value;
    }

}
