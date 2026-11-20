<?php

namespace Salable\SDK\Models;

use Microsoft\Kiota\Abstractions\Serialization\ComposedTypeWrapper;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\ParseNodeHelper;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Composed type wrapper for classes string, UsageRecordsData_recordedAtMember1
*/
class UsageRecordsData_recordedAt implements ComposedTypeWrapper, Parsable 
{
    /**
     * @var string|null $string Composed type representation for type string
    */
    private ?string $string = null;
    
    /**
     * @var UsageRecordsData_recordedAtMember1|null $usageRecordsData_recordedAtMember1 Composed type representation for type UsageRecordsData_recordedAtMember1
    */
    private ?UsageRecordsData_recordedAtMember1 $usageRecordsData_recordedAtMember1 = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UsageRecordsData_recordedAt
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UsageRecordsData_recordedAt {
        $result = new UsageRecordsData_recordedAt();
        if ($parseNode->getStringValue() !== null) {
            $result->setString($parseNode->getStringValue());
        } else {
            $result->setUsageRecordsDataRecordedAtMember1(new UsageRecordsData_recordedAtMember1());
        }
        return $result;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        if ($this->getUsageRecordsDataRecordedAtMember1() !== null) {
            return ParseNodeHelper::mergeDeserializersForIntersectionWrapper($this->getUsageRecordsDataRecordedAtMember1());
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
     * Gets the UsageRecordsData_recordedAtMember1 property value. Composed type representation for type UsageRecordsData_recordedAtMember1
     * @return UsageRecordsData_recordedAtMember1|null
    */
    public function getUsageRecordsDataRecordedAtMember1(): ?UsageRecordsData_recordedAtMember1 {
        return $this->usageRecordsData_recordedAtMember1;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        if ($this->getString() !== null) {
            $writer->writeStringValue(null, $this->getString());
        } else {
            $writer->writeObjectValue(null, $this->getUsageRecordsDataRecordedAtMember1());
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
     * Sets the UsageRecordsData_recordedAtMember1 property value. Composed type representation for type UsageRecordsData_recordedAtMember1
     * @param UsageRecordsData_recordedAtMember1|null $value Value to set for the UsageRecordsData_recordedAtMember1 property.
    */
    public function setUsageRecordsDataRecordedAtMember1(?UsageRecordsData_recordedAtMember1 $value): void {
        $this->usageRecordsData_recordedAtMember1 = $value;
    }

}
