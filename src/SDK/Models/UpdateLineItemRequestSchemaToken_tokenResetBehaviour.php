<?php

namespace Salable\SDK\Models;

use Microsoft\Kiota\Abstractions\Serialization\ComposedTypeWrapper;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\ParseNodeHelper;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Composed type wrapper for classes string, UpdateLineItemRequestSchemaToken_tokenResetBehaviourMember1
*/
class UpdateLineItemRequestSchemaToken_tokenResetBehaviour implements ComposedTypeWrapper, Parsable 
{
    /**
     * @var string|null $string Composed type representation for type string
    */
    private ?string $string = null;
    
    /**
     * @var UpdateLineItemRequestSchemaToken_tokenResetBehaviourMember1|null $updateLineItemRequestSchemaToken_tokenResetBehaviourMember1 Composed type representation for type UpdateLineItemRequestSchemaToken_tokenResetBehaviourMember1
    */
    private ?UpdateLineItemRequestSchemaToken_tokenResetBehaviourMember1 $updateLineItemRequestSchemaToken_tokenResetBehaviourMember1 = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UpdateLineItemRequestSchemaToken_tokenResetBehaviour
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UpdateLineItemRequestSchemaToken_tokenResetBehaviour {
        $result = new UpdateLineItemRequestSchemaToken_tokenResetBehaviour();
        if ($parseNode->getStringValue() !== null) {
            $result->setString($parseNode->getStringValue());
        } else {
            $result->setUpdateLineItemRequestSchemaTokenTokenResetBehaviourMember1(new UpdateLineItemRequestSchemaToken_tokenResetBehaviourMember1());
        }
        return $result;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        if ($this->getUpdateLineItemRequestSchemaTokenTokenResetBehaviourMember1() !== null) {
            return ParseNodeHelper::mergeDeserializersForIntersectionWrapper($this->getUpdateLineItemRequestSchemaTokenTokenResetBehaviourMember1());
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
     * Gets the UpdateLineItemRequestSchemaToken_tokenResetBehaviourMember1 property value. Composed type representation for type UpdateLineItemRequestSchemaToken_tokenResetBehaviourMember1
     * @return UpdateLineItemRequestSchemaToken_tokenResetBehaviourMember1|null
    */
    public function getUpdateLineItemRequestSchemaTokenTokenResetBehaviourMember1(): ?UpdateLineItemRequestSchemaToken_tokenResetBehaviourMember1 {
        return $this->updateLineItemRequestSchemaToken_tokenResetBehaviourMember1;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        if ($this->getString() !== null) {
            $writer->writeStringValue(null, $this->getString());
        } else {
            $writer->writeObjectValue(null, $this->getUpdateLineItemRequestSchemaTokenTokenResetBehaviourMember1());
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
     * Sets the UpdateLineItemRequestSchemaToken_tokenResetBehaviourMember1 property value. Composed type representation for type UpdateLineItemRequestSchemaToken_tokenResetBehaviourMember1
     * @param UpdateLineItemRequestSchemaToken_tokenResetBehaviourMember1|null $value Value to set for the UpdateLineItemRequestSchemaToken_tokenResetBehaviourMember1 property.
    */
    public function setUpdateLineItemRequestSchemaTokenTokenResetBehaviourMember1(?UpdateLineItemRequestSchemaToken_tokenResetBehaviourMember1 $value): void {
        $this->updateLineItemRequestSchemaToken_tokenResetBehaviourMember1 = $value;
    }

}
