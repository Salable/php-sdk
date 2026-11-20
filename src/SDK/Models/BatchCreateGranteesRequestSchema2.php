<?php

namespace Salable\SDK\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class BatchCreateGranteesRequestSchema2 implements Parsable 
{
    /**
     * @var string|null $granteeId The ID of the entity receiving access in your system, like a user ID or workspace ID.
    */
    private ?string $granteeId = null;
    
    /**
     * @var string|null $name A readable name to identify the grantee.
    */
    private ?string $name = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return BatchCreateGranteesRequestSchema2
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): BatchCreateGranteesRequestSchema2 {
        return new BatchCreateGranteesRequestSchema2();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'granteeId' => fn(ParseNode $n) => $o->setGranteeId($n->getStringValue()),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
        ];
    }

    /**
     * Gets the granteeId property value. The ID of the entity receiving access in your system, like a user ID or workspace ID.
     * @return string|null
    */
    public function getGranteeId(): ?string {
        return $this->granteeId;
    }

    /**
     * Gets the name property value. A readable name to identify the grantee.
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('granteeId', $this->getGranteeId());
        $writer->writeStringValue('name', $this->getName());
    }

    /**
     * Sets the granteeId property value. The ID of the entity receiving access in your system, like a user ID or workspace ID.
     * @param string|null $value Value to set for the granteeId property.
    */
    public function setGranteeId(?string $value): void {
        $this->granteeId = $value;
    }

    /**
     * Sets the name property value. A readable name to identify the grantee.
     * @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->name = $value;
    }

}
