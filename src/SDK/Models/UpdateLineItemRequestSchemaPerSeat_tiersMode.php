<?php

namespace Salable\SDK\Models;

use Microsoft\Kiota\Abstractions\Serialization\ComposedTypeWrapper;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\ParseNodeHelper;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Composed type wrapper for classes string, UpdateLineItemRequestSchemaPerSeat_tiersModeMember1
*/
class UpdateLineItemRequestSchemaPerSeat_tiersMode implements ComposedTypeWrapper, Parsable 
{
    /**
     * @var string|null $string Composed type representation for type string
    */
    private ?string $string = null;
    
    /**
     * @var UpdateLineItemRequestSchemaPerSeat_tiersModeMember1|null $updateLineItemRequestSchemaPerSeat_tiersModeMember1 Composed type representation for type UpdateLineItemRequestSchemaPerSeat_tiersModeMember1
    */
    private ?UpdateLineItemRequestSchemaPerSeat_tiersModeMember1 $updateLineItemRequestSchemaPerSeat_tiersModeMember1 = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UpdateLineItemRequestSchemaPerSeat_tiersMode
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UpdateLineItemRequestSchemaPerSeat_tiersMode {
        $result = new UpdateLineItemRequestSchemaPerSeat_tiersMode();
        if ($parseNode->getStringValue() !== null) {
            $result->setString($parseNode->getStringValue());
        } else {
            $result->setUpdateLineItemRequestSchemaPerSeatTiersModeMember1(new UpdateLineItemRequestSchemaPerSeat_tiersModeMember1());
        }
        return $result;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        if ($this->getUpdateLineItemRequestSchemaPerSeatTiersModeMember1() !== null) {
            return ParseNodeHelper::mergeDeserializersForIntersectionWrapper($this->getUpdateLineItemRequestSchemaPerSeatTiersModeMember1());
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
     * Gets the UpdateLineItemRequestSchemaPerSeat_tiersModeMember1 property value. Composed type representation for type UpdateLineItemRequestSchemaPerSeat_tiersModeMember1
     * @return UpdateLineItemRequestSchemaPerSeat_tiersModeMember1|null
    */
    public function getUpdateLineItemRequestSchemaPerSeatTiersModeMember1(): ?UpdateLineItemRequestSchemaPerSeat_tiersModeMember1 {
        return $this->updateLineItemRequestSchemaPerSeat_tiersModeMember1;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        if ($this->getString() !== null) {
            $writer->writeStringValue(null, $this->getString());
        } else {
            $writer->writeObjectValue(null, $this->getUpdateLineItemRequestSchemaPerSeatTiersModeMember1());
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
     * Sets the UpdateLineItemRequestSchemaPerSeat_tiersModeMember1 property value. Composed type representation for type UpdateLineItemRequestSchemaPerSeat_tiersModeMember1
     * @param UpdateLineItemRequestSchemaPerSeat_tiersModeMember1|null $value Value to set for the UpdateLineItemRequestSchemaPerSeat_tiersModeMember1 property.
    */
    public function setUpdateLineItemRequestSchemaPerSeatTiersModeMember1(?UpdateLineItemRequestSchemaPerSeat_tiersModeMember1 $value): void {
        $this->updateLineItemRequestSchemaPerSeat_tiersModeMember1 = $value;
    }

}
