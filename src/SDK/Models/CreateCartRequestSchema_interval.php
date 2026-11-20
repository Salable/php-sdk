<?php

namespace Salable\SDK\Models;

use Microsoft\Kiota\Abstractions\Serialization\ComposedTypeWrapper;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\ParseNodeHelper;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Composed type wrapper for classes CreateCartRequestSchema_intervalMember1, string
*/
class CreateCartRequestSchema_interval implements ComposedTypeWrapper, Parsable 
{
    /**
     * @var CreateCartRequestSchema_intervalMember1|null $createCartRequestSchema_intervalMember1 Composed type representation for type CreateCartRequestSchema_intervalMember1
    */
    private ?CreateCartRequestSchema_intervalMember1 $createCartRequestSchema_intervalMember1 = null;
    
    /**
     * @var string|null $string Composed type representation for type string
    */
    private ?string $string = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CreateCartRequestSchema_interval
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CreateCartRequestSchema_interval {
        $result = new CreateCartRequestSchema_interval();
        if ($parseNode->getStringValue() !== null) {
            $result->setString($parseNode->getStringValue());
        } else {
            $result->setCreateCartRequestSchemaIntervalMember1(new CreateCartRequestSchema_intervalMember1());
        }
        return $result;
    }

    /**
     * Gets the CreateCartRequestSchema_intervalMember1 property value. Composed type representation for type CreateCartRequestSchema_intervalMember1
     * @return CreateCartRequestSchema_intervalMember1|null
    */
    public function getCreateCartRequestSchemaIntervalMember1(): ?CreateCartRequestSchema_intervalMember1 {
        return $this->createCartRequestSchema_intervalMember1;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        if ($this->getCreateCartRequestSchemaIntervalMember1() !== null) {
            return ParseNodeHelper::mergeDeserializersForIntersectionWrapper($this->getCreateCartRequestSchemaIntervalMember1());
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
            $writer->writeObjectValue(null, $this->getCreateCartRequestSchemaIntervalMember1());
        }
    }

    /**
     * Sets the CreateCartRequestSchema_intervalMember1 property value. Composed type representation for type CreateCartRequestSchema_intervalMember1
     * @param CreateCartRequestSchema_intervalMember1|null $value Value to set for the CreateCartRequestSchema_intervalMember1 property.
    */
    public function setCreateCartRequestSchemaIntervalMember1(?CreateCartRequestSchema_intervalMember1 $value): void {
        $this->createCartRequestSchema_intervalMember1 = $value;
    }

    /**
     * Sets the string property value. Composed type representation for type string
     * @param string|null $value Value to set for the string property.
    */
    public function setString(?string $value): void {
        $this->string = $value;
    }

}
