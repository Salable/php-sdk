<?php

namespace Salable\SDK\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class BatchCreateGranteesResponseSchemaData implements Parsable 
{
    /**
     * @var float|null $skipped The number of duplicate or existing grantees that were not created.
    */
    private ?float $skipped = null;
    
    /**
     * @var float|null $succeeded The number of grantees that were created.
    */
    private ?float $succeeded = null;
    
    /**
     * @var float|null $total The number of grantees submitted in the request.
    */
    private ?float $total = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return BatchCreateGranteesResponseSchemaData
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): BatchCreateGranteesResponseSchemaData {
        return new BatchCreateGranteesResponseSchemaData();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'skipped' => fn(ParseNode $n) => $o->setSkipped($n->getFloatValue()),
            'succeeded' => fn(ParseNode $n) => $o->setSucceeded($n->getFloatValue()),
            'total' => fn(ParseNode $n) => $o->setTotal($n->getFloatValue()),
        ];
    }

    /**
     * Gets the skipped property value. The number of duplicate or existing grantees that were not created.
     * @return float|null
    */
    public function getSkipped(): ?float {
        return $this->skipped;
    }

    /**
     * Gets the succeeded property value. The number of grantees that were created.
     * @return float|null
    */
    public function getSucceeded(): ?float {
        return $this->succeeded;
    }

    /**
     * Gets the total property value. The number of grantees submitted in the request.
     * @return float|null
    */
    public function getTotal(): ?float {
        return $this->total;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeFloatValue('skipped', $this->getSkipped());
        $writer->writeFloatValue('succeeded', $this->getSucceeded());
        $writer->writeFloatValue('total', $this->getTotal());
    }

    /**
     * Sets the skipped property value. The number of duplicate or existing grantees that were not created.
     * @param float|null $value Value to set for the skipped property.
    */
    public function setSkipped(?float $value): void {
        $this->skipped = $value;
    }

    /**
     * Sets the succeeded property value. The number of grantees that were created.
     * @param float|null $value Value to set for the succeeded property.
    */
    public function setSucceeded(?float $value): void {
        $this->succeeded = $value;
    }

    /**
     * Sets the total property value. The number of grantees submitted in the request.
     * @param float|null $value Value to set for the total property.
    */
    public function setTotal(?float $value): void {
        $this->total = $value;
    }

}
