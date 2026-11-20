<?php

namespace Salable\SDK\Models;

use Microsoft\Kiota\Abstractions\Serialization\ComposedTypeWrapper;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\ParseNodeHelper;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Composed type wrapper for classes Post_intervalMember1, string
*/
class Post_interval implements ComposedTypeWrapper, Parsable 
{
    /**
     * @var Post_intervalMember1|null $post_intervalMember1 Composed type representation for type Post_intervalMember1
    */
    private ?Post_intervalMember1 $post_intervalMember1 = null;
    
    /**
     * @var string|null $string Composed type representation for type string
    */
    private ?string $string = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Post_interval
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Post_interval {
        $result = new Post_interval();
        if ($parseNode->getStringValue() !== null) {
            $result->setString($parseNode->getStringValue());
        } else {
            $result->setPostIntervalMember1(new Post_intervalMember1());
        }
        return $result;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        if ($this->getPostIntervalMember1() !== null) {
            return ParseNodeHelper::mergeDeserializersForIntersectionWrapper($this->getPostIntervalMember1());
        }
        return [];
    }

    /**
     * Gets the Post_intervalMember1 property value. Composed type representation for type Post_intervalMember1
     * @return Post_intervalMember1|null
    */
    public function getPostIntervalMember1(): ?Post_intervalMember1 {
        return $this->post_intervalMember1;
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
            $writer->writeObjectValue(null, $this->getPostIntervalMember1());
        }
    }

    /**
     * Sets the Post_intervalMember1 property value. Composed type representation for type Post_intervalMember1
     * @param Post_intervalMember1|null $value Value to set for the Post_intervalMember1 property.
    */
    public function setPostIntervalMember1(?Post_intervalMember1 $value): void {
        $this->post_intervalMember1 = $value;
    }

    /**
     * Sets the string property value. Composed type representation for type string
     * @param string|null $value Value to set for the string property.
    */
    public function setString(?string $value): void {
        $this->string = $value;
    }

}
