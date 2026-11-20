<?php

namespace Salable\SDK\Models;

use Microsoft\Kiota\Abstractions\Serialization\ComposedTypeWrapper;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\ParseNodeHelper;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Composed type wrapper for classes string, UpdateLineItemRequestSchemaMetered_tiersModeMember1
*/
class UpdateLineItemRequestSchemaMetered_tiersMode implements ComposedTypeWrapper, Parsable 
{
    /**
     * @var string|null $string Composed type representation for type string
    */
    private ?string $string = null;
    
    /**
     * @var UpdateLineItemRequestSchemaMetered_tiersModeMember1|null $updateLineItemRequestSchemaMetered_tiersModeMember1 Composed type representation for type UpdateLineItemRequestSchemaMetered_tiersModeMember1
    */
    private ?UpdateLineItemRequestSchemaMetered_tiersModeMember1 $updateLineItemRequestSchemaMetered_tiersModeMember1 = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UpdateLineItemRequestSchemaMetered_tiersMode
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UpdateLineItemRequestSchemaMetered_tiersMode {
        $result = new UpdateLineItemRequestSchemaMetered_tiersMode();
        if ($parseNode->getStringValue() !== null) {
            $result->setString($parseNode->getStringValue());
        } else {
            $result->setUpdateLineItemRequestSchemaMeteredTiersModeMember1(new UpdateLineItemRequestSchemaMetered_tiersModeMember1());
        }
        return $result;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        if ($this->getUpdateLineItemRequestSchemaMeteredTiersModeMember1() !== null) {
            return ParseNodeHelper::mergeDeserializersForIntersectionWrapper($this->getUpdateLineItemRequestSchemaMeteredTiersModeMember1());
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
     * Gets the UpdateLineItemRequestSchemaMetered_tiersModeMember1 property value. Composed type representation for type UpdateLineItemRequestSchemaMetered_tiersModeMember1
     * @return UpdateLineItemRequestSchemaMetered_tiersModeMember1|null
    */
    public function getUpdateLineItemRequestSchemaMeteredTiersModeMember1(): ?UpdateLineItemRequestSchemaMetered_tiersModeMember1 {
        return $this->updateLineItemRequestSchemaMetered_tiersModeMember1;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        if ($this->getString() !== null) {
            $writer->writeStringValue(null, $this->getString());
        } else {
            $writer->writeObjectValue(null, $this->getUpdateLineItemRequestSchemaMeteredTiersModeMember1());
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
     * Sets the UpdateLineItemRequestSchemaMetered_tiersModeMember1 property value. Composed type representation for type UpdateLineItemRequestSchemaMetered_tiersModeMember1
     * @param UpdateLineItemRequestSchemaMetered_tiersModeMember1|null $value Value to set for the UpdateLineItemRequestSchemaMetered_tiersModeMember1 property.
    */
    public function setUpdateLineItemRequestSchemaMeteredTiersModeMember1(?UpdateLineItemRequestSchemaMetered_tiersModeMember1 $value): void {
        $this->updateLineItemRequestSchemaMetered_tiersModeMember1 = $value;
    }

}
