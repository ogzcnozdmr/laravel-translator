<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/v2/intent.proto

namespace Google\Cloud\Dialogflow\V2\Intent;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A rich response message.
 * Corresponds to the intent `Response` field in the Dialogflow console.
 * For more information, see
 * [Rich response
 * messages](https://cloud.google.com/dialogflow/docs/intents-rich-messages).
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.v2.Intent.Message</code>
 */
class Message extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. The platform that this message is intended for.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.Intent.Message.Platform platform = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $platform = 0;
    protected $message;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Dialogflow\V2\Intent\Message\Text $text
     *           The text response.
     *     @type \Google\Cloud\Dialogflow\V2\Intent\Message\Image $image
     *           The image response.
     *     @type \Google\Cloud\Dialogflow\V2\Intent\Message\QuickReplies $quick_replies
     *           The quick replies response.
     *     @type \Google\Cloud\Dialogflow\V2\Intent\Message\Card $card
     *           The card response.
     *     @type \Google\Protobuf\Struct $payload
     *           A custom platform-specific response.
     *     @type \Google\Cloud\Dialogflow\V2\Intent\Message\SimpleResponses $simple_responses
     *           The voice and text-only responses for Actions on Google.
     *     @type \Google\Cloud\Dialogflow\V2\Intent\Message\BasicCard $basic_card
     *           The basic card response for Actions on Google.
     *     @type \Google\Cloud\Dialogflow\V2\Intent\Message\Suggestions $suggestions
     *           The suggestion chips for Actions on Google.
     *     @type \Google\Cloud\Dialogflow\V2\Intent\Message\LinkOutSuggestion $link_out_suggestion
     *           The link out suggestion chip for Actions on Google.
     *     @type \Google\Cloud\Dialogflow\V2\Intent\Message\ListSelect $list_select
     *           The list card response for Actions on Google.
     *     @type \Google\Cloud\Dialogflow\V2\Intent\Message\CarouselSelect $carousel_select
     *           The carousel card response for Actions on Google.
     *     @type \Google\Cloud\Dialogflow\V2\Intent\Message\BrowseCarouselCard $browse_carousel_card
     *           Browse carousel card for Actions on Google.
     *     @type \Google\Cloud\Dialogflow\V2\Intent\Message\TableCard $table_card
     *           Table card for Actions on Google.
     *     @type \Google\Cloud\Dialogflow\V2\Intent\Message\MediaContent $media_content
     *           The media content card for Actions on Google.
     *     @type int $platform
     *           Optional. The platform that this message is intended for.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\V2\Intent::initOnce();
        parent::__construct($data);
    }

    /**
     * The text response.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.Intent.Message.Text text = 1;</code>
     * @return \Google\Cloud\Dialogflow\V2\Intent\Message\Text|null
     */
    public function getText()
    {
        return $this->readOneof(1);
    }

    public function hasText()
    {
        return $this->hasOneof(1);
    }

    /**
     * The text response.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.Intent.Message.Text text = 1;</code>
     * @param \Google\Cloud\Dialogflow\V2\Intent\Message\Text $var
     * @return $this
     */
    public function setText($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dialogflow\V2\Intent\Message\Text::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * The image response.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.Intent.Message.Image image = 2;</code>
     * @return \Google\Cloud\Dialogflow\V2\Intent\Message\Image|null
     */
    public function getImage()
    {
        return $this->readOneof(2);
    }

    public function hasImage()
    {
        return $this->hasOneof(2);
    }

    /**
     * The image response.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.Intent.Message.Image image = 2;</code>
     * @param \Google\Cloud\Dialogflow\V2\Intent\Message\Image $var
     * @return $this
     */
    public function setImage($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dialogflow\V2\Intent\Message\Image::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * The quick replies response.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.Intent.Message.QuickReplies quick_replies = 3;</code>
     * @return \Google\Cloud\Dialogflow\V2\Intent\Message\QuickReplies|null
     */
    public function getQuickReplies()
    {
        return $this->readOneof(3);
    }

    public function hasQuickReplies()
    {
        return $this->hasOneof(3);
    }

    /**
     * The quick replies response.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.Intent.Message.QuickReplies quick_replies = 3;</code>
     * @param \Google\Cloud\Dialogflow\V2\Intent\Message\QuickReplies $var
     * @return $this
     */
    public function setQuickReplies($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dialogflow\V2\Intent\Message\QuickReplies::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * The card response.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.Intent.Message.Card card = 4;</code>
     * @return \Google\Cloud\Dialogflow\V2\Intent\Message\Card|null
     */
    public function getCard()
    {
        return $this->readOneof(4);
    }

    public function hasCard()
    {
        return $this->hasOneof(4);
    }

    /**
     * The card response.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.Intent.Message.Card card = 4;</code>
     * @param \Google\Cloud\Dialogflow\V2\Intent\Message\Card $var
     * @return $this
     */
    public function setCard($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dialogflow\V2\Intent\Message\Card::class);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * A custom platform-specific response.
     *
     * Generated from protobuf field <code>.google.protobuf.Struct payload = 5;</code>
     * @return \Google\Protobuf\Struct|null
     */
    public function getPayload()
    {
        return $this->readOneof(5);
    }

    public function hasPayload()
    {
        return $this->hasOneof(5);
    }

    /**
     * A custom platform-specific response.
     *
     * Generated from protobuf field <code>.google.protobuf.Struct payload = 5;</code>
     * @param \Google\Protobuf\Struct $var
     * @return $this
     */
    public function setPayload($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Struct::class);
        $this->writeOneof(5, $var);

        return $this;
    }

    /**
     * The voice and text-only responses for Actions on Google.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.Intent.Message.SimpleResponses simple_responses = 7;</code>
     * @return \Google\Cloud\Dialogflow\V2\Intent\Message\SimpleResponses|null
     */
    public function getSimpleResponses()
    {
        return $this->readOneof(7);
    }

    public function hasSimpleResponses()
    {
        return $this->hasOneof(7);
    }

    /**
     * The voice and text-only responses for Actions on Google.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.Intent.Message.SimpleResponses simple_responses = 7;</code>
     * @param \Google\Cloud\Dialogflow\V2\Intent\Message\SimpleResponses $var
     * @return $this
     */
    public function setSimpleResponses($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dialogflow\V2\Intent\Message\SimpleResponses::class);
        $this->writeOneof(7, $var);

        return $this;
    }

    /**
     * The basic card response for Actions on Google.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.Intent.Message.BasicCard basic_card = 8;</code>
     * @return \Google\Cloud\Dialogflow\V2\Intent\Message\BasicCard|null
     */
    public function getBasicCard()
    {
        return $this->readOneof(8);
    }

    public function hasBasicCard()
    {
        return $this->hasOneof(8);
    }

    /**
     * The basic card response for Actions on Google.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.Intent.Message.BasicCard basic_card = 8;</code>
     * @param \Google\Cloud\Dialogflow\V2\Intent\Message\BasicCard $var
     * @return $this
     */
    public function setBasicCard($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dialogflow\V2\Intent\Message\BasicCard::class);
        $this->writeOneof(8, $var);

        return $this;
    }

    /**
     * The suggestion chips for Actions on Google.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.Intent.Message.Suggestions suggestions = 9;</code>
     * @return \Google\Cloud\Dialogflow\V2\Intent\Message\Suggestions|null
     */
    public function getSuggestions()
    {
        return $this->readOneof(9);
    }

    public function hasSuggestions()
    {
        return $this->hasOneof(9);
    }

    /**
     * The suggestion chips for Actions on Google.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.Intent.Message.Suggestions suggestions = 9;</code>
     * @param \Google\Cloud\Dialogflow\V2\Intent\Message\Suggestions $var
     * @return $this
     */
    public function setSuggestions($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dialogflow\V2\Intent\Message\Suggestions::class);
        $this->writeOneof(9, $var);

        return $this;
    }

    /**
     * The link out suggestion chip for Actions on Google.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.Intent.Message.LinkOutSuggestion link_out_suggestion = 10;</code>
     * @return \Google\Cloud\Dialogflow\V2\Intent\Message\LinkOutSuggestion|null
     */
    public function getLinkOutSuggestion()
    {
        return $this->readOneof(10);
    }

    public function hasLinkOutSuggestion()
    {
        return $this->hasOneof(10);
    }

    /**
     * The link out suggestion chip for Actions on Google.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.Intent.Message.LinkOutSuggestion link_out_suggestion = 10;</code>
     * @param \Google\Cloud\Dialogflow\V2\Intent\Message\LinkOutSuggestion $var
     * @return $this
     */
    public function setLinkOutSuggestion($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dialogflow\V2\Intent\Message\LinkOutSuggestion::class);
        $this->writeOneof(10, $var);

        return $this;
    }

    /**
     * The list card response for Actions on Google.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.Intent.Message.ListSelect list_select = 11;</code>
     * @return \Google\Cloud\Dialogflow\V2\Intent\Message\ListSelect|null
     */
    public function getListSelect()
    {
        return $this->readOneof(11);
    }

    public function hasListSelect()
    {
        return $this->hasOneof(11);
    }

    /**
     * The list card response for Actions on Google.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.Intent.Message.ListSelect list_select = 11;</code>
     * @param \Google\Cloud\Dialogflow\V2\Intent\Message\ListSelect $var
     * @return $this
     */
    public function setListSelect($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dialogflow\V2\Intent\Message\ListSelect::class);
        $this->writeOneof(11, $var);

        return $this;
    }

    /**
     * The carousel card response for Actions on Google.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.Intent.Message.CarouselSelect carousel_select = 12;</code>
     * @return \Google\Cloud\Dialogflow\V2\Intent\Message\CarouselSelect|null
     */
    public function getCarouselSelect()
    {
        return $this->readOneof(12);
    }

    public function hasCarouselSelect()
    {
        return $this->hasOneof(12);
    }

    /**
     * The carousel card response for Actions on Google.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.Intent.Message.CarouselSelect carousel_select = 12;</code>
     * @param \Google\Cloud\Dialogflow\V2\Intent\Message\CarouselSelect $var
     * @return $this
     */
    public function setCarouselSelect($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dialogflow\V2\Intent\Message\CarouselSelect::class);
        $this->writeOneof(12, $var);

        return $this;
    }

    /**
     * Browse carousel card for Actions on Google.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.Intent.Message.BrowseCarouselCard browse_carousel_card = 22;</code>
     * @return \Google\Cloud\Dialogflow\V2\Intent\Message\BrowseCarouselCard|null
     */
    public function getBrowseCarouselCard()
    {
        return $this->readOneof(22);
    }

    public function hasBrowseCarouselCard()
    {
        return $this->hasOneof(22);
    }

    /**
     * Browse carousel card for Actions on Google.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.Intent.Message.BrowseCarouselCard browse_carousel_card = 22;</code>
     * @param \Google\Cloud\Dialogflow\V2\Intent\Message\BrowseCarouselCard $var
     * @return $this
     */
    public function setBrowseCarouselCard($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dialogflow\V2\Intent\Message\BrowseCarouselCard::class);
        $this->writeOneof(22, $var);

        return $this;
    }

    /**
     * Table card for Actions on Google.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.Intent.Message.TableCard table_card = 23;</code>
     * @return \Google\Cloud\Dialogflow\V2\Intent\Message\TableCard|null
     */
    public function getTableCard()
    {
        return $this->readOneof(23);
    }

    public function hasTableCard()
    {
        return $this->hasOneof(23);
    }

    /**
     * Table card for Actions on Google.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.Intent.Message.TableCard table_card = 23;</code>
     * @param \Google\Cloud\Dialogflow\V2\Intent\Message\TableCard $var
     * @return $this
     */
    public function setTableCard($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dialogflow\V2\Intent\Message\TableCard::class);
        $this->writeOneof(23, $var);

        return $this;
    }

    /**
     * The media content card for Actions on Google.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.Intent.Message.MediaContent media_content = 24;</code>
     * @return \Google\Cloud\Dialogflow\V2\Intent\Message\MediaContent|null
     */
    public function getMediaContent()
    {
        return $this->readOneof(24);
    }

    public function hasMediaContent()
    {
        return $this->hasOneof(24);
    }

    /**
     * The media content card for Actions on Google.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.Intent.Message.MediaContent media_content = 24;</code>
     * @param \Google\Cloud\Dialogflow\V2\Intent\Message\MediaContent $var
     * @return $this
     */
    public function setMediaContent($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dialogflow\V2\Intent\Message\MediaContent::class);
        $this->writeOneof(24, $var);

        return $this;
    }

    /**
     * Optional. The platform that this message is intended for.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.Intent.Message.Platform platform = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getPlatform()
    {
        return $this->platform;
    }

    /**
     * Optional. The platform that this message is intended for.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.Intent.Message.Platform platform = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int $var
     * @return $this
     */
    public function setPlatform($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Dialogflow\V2\Intent\Message\Platform::class);
        $this->platform = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getMessage()
    {
        return $this->whichOneof("message");
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Message::class, \Google\Cloud\Dialogflow\V2\Intent_Message::class);

