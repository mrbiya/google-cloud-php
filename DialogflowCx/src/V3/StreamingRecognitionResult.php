<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/cx/v3/session.proto

namespace Google\Cloud\Dialogflow\Cx\V3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Contains a speech recognition result corresponding to a portion of the audio
 * that is currently being processed or an indication that this is the end
 * of the single requested utterance.
 * While end-user audio is being processed, Dialogflow sends a series of
 * results. Each result may contain a `transcript` value. A transcript
 * represents a portion of the utterance. While the recognizer is processing
 * audio, transcript values may be interim values or finalized values.
 * Once a transcript is finalized, the `is_final` value is set to true and
 * processing continues for the next transcript.
 * If `StreamingDetectIntentRequest.query_input.audio.config.single_utterance`
 * was true, and the recognizer has completed processing audio,
 * the `message_type` value is set to `END_OF_SINGLE_UTTERANCE and the
 * following (last) result contains the last finalized transcript.
 * The complete end-user utterance is determined by concatenating the
 * finalized transcript values received for the series of results.
 * In the following example, single utterance is enabled. In the case where
 * single utterance is not enabled, result 7 would not occur.
 * ```
 * Num | transcript              | message_type            | is_final
 * --- | ----------------------- | ----------------------- | --------
 * 1   | "tube"                  | TRANSCRIPT              | false
 * 2   | "to be a"               | TRANSCRIPT              | false
 * 3   | "to be"                 | TRANSCRIPT              | false
 * 4   | "to be or not to be"    | TRANSCRIPT              | true
 * 5   | "that's"                | TRANSCRIPT              | false
 * 6   | "that is                | TRANSCRIPT              | false
 * 7   | unset                   | END_OF_SINGLE_UTTERANCE | unset
 * 8   | " that is the question" | TRANSCRIPT              | true
 * ```
 * Concatenating the finalized transcripts with `is_final` set to true,
 * the complete utterance becomes "to be or not to be that is the question".
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.cx.v3.StreamingRecognitionResult</code>
 */
class StreamingRecognitionResult extends \Google\Protobuf\Internal\Message
{
    /**
     * Type of the result message.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.cx.v3.StreamingRecognitionResult.MessageType message_type = 1;</code>
     */
    protected $message_type = 0;
    /**
     * Transcript text representing the words that the user spoke.
     * Populated if and only if `message_type` = `TRANSCRIPT`.
     *
     * Generated from protobuf field <code>string transcript = 2;</code>
     */
    protected $transcript = '';
    /**
     * If `false`, the `StreamingRecognitionResult` represents an
     * interim result that may change. If `true`, the recognizer will not return
     * any further hypotheses about this piece of the audio. May only be populated
     * for `message_type` = `TRANSCRIPT`.
     *
     * Generated from protobuf field <code>bool is_final = 3;</code>
     */
    protected $is_final = false;
    /**
     * The Speech confidence between 0.0 and 1.0 for the current portion of audio.
     * A higher number indicates an estimated greater likelihood that the
     * recognized words are correct. The default of 0.0 is a sentinel value
     * indicating that confidence was not set.
     * This field is typically only provided if `is_final` is true and you should
     * not rely on it being accurate or even set.
     *
     * Generated from protobuf field <code>float confidence = 4;</code>
     */
    protected $confidence = 0.0;
    /**
     * An estimate of the likelihood that the speech recognizer will
     * not change its guess about this interim recognition result:
     * * If the value is unspecified or 0.0, Dialogflow didn't compute the
     *   stability. In particular, Dialogflow will only provide stability for
     *   `TRANSCRIPT` results with `is_final = false`.
     * * Otherwise, the value is in (0.0, 1.0] where 0.0 means completely
     *   unstable and 1.0 means completely stable.
     *
     * Generated from protobuf field <code>float stability = 6;</code>
     */
    protected $stability = 0.0;
    /**
     * Word-specific information for the words recognized by Speech in
     * [transcript][google.cloud.dialogflow.cx.v3.StreamingRecognitionResult.transcript].
     * Populated if and only if `message_type` = `TRANSCRIPT` and
     * [InputAudioConfig.enable_word_info] is set.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dialogflow.cx.v3.SpeechWordInfo speech_word_info = 7;</code>
     */
    private $speech_word_info;
    /**
     * Time offset of the end of this Speech recognition result relative to the
     * beginning of the audio. Only populated for `message_type` =
     * `TRANSCRIPT`.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration speech_end_offset = 8;</code>
     */
    protected $speech_end_offset = null;
    /**
     * Detected language code for the transcript.
     *
     * Generated from protobuf field <code>string language_code = 10;</code>
     */
    protected $language_code = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $message_type
     *           Type of the result message.
     *     @type string $transcript
     *           Transcript text representing the words that the user spoke.
     *           Populated if and only if `message_type` = `TRANSCRIPT`.
     *     @type bool $is_final
     *           If `false`, the `StreamingRecognitionResult` represents an
     *           interim result that may change. If `true`, the recognizer will not return
     *           any further hypotheses about this piece of the audio. May only be populated
     *           for `message_type` = `TRANSCRIPT`.
     *     @type float $confidence
     *           The Speech confidence between 0.0 and 1.0 for the current portion of audio.
     *           A higher number indicates an estimated greater likelihood that the
     *           recognized words are correct. The default of 0.0 is a sentinel value
     *           indicating that confidence was not set.
     *           This field is typically only provided if `is_final` is true and you should
     *           not rely on it being accurate or even set.
     *     @type float $stability
     *           An estimate of the likelihood that the speech recognizer will
     *           not change its guess about this interim recognition result:
     *           * If the value is unspecified or 0.0, Dialogflow didn't compute the
     *             stability. In particular, Dialogflow will only provide stability for
     *             `TRANSCRIPT` results with `is_final = false`.
     *           * Otherwise, the value is in (0.0, 1.0] where 0.0 means completely
     *             unstable and 1.0 means completely stable.
     *     @type array<\Google\Cloud\Dialogflow\Cx\V3\SpeechWordInfo>|\Google\Protobuf\Internal\RepeatedField $speech_word_info
     *           Word-specific information for the words recognized by Speech in
     *           [transcript][google.cloud.dialogflow.cx.v3.StreamingRecognitionResult.transcript].
     *           Populated if and only if `message_type` = `TRANSCRIPT` and
     *           [InputAudioConfig.enable_word_info] is set.
     *     @type \Google\Protobuf\Duration $speech_end_offset
     *           Time offset of the end of this Speech recognition result relative to the
     *           beginning of the audio. Only populated for `message_type` =
     *           `TRANSCRIPT`.
     *     @type string $language_code
     *           Detected language code for the transcript.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\Cx\V3\Session::initOnce();
        parent::__construct($data);
    }

    /**
     * Type of the result message.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.cx.v3.StreamingRecognitionResult.MessageType message_type = 1;</code>
     * @return int
     */
    public function getMessageType()
    {
        return $this->message_type;
    }

    /**
     * Type of the result message.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.cx.v3.StreamingRecognitionResult.MessageType message_type = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setMessageType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Dialogflow\Cx\V3\StreamingRecognitionResult\MessageType::class);
        $this->message_type = $var;

        return $this;
    }

    /**
     * Transcript text representing the words that the user spoke.
     * Populated if and only if `message_type` = `TRANSCRIPT`.
     *
     * Generated from protobuf field <code>string transcript = 2;</code>
     * @return string
     */
    public function getTranscript()
    {
        return $this->transcript;
    }

    /**
     * Transcript text representing the words that the user spoke.
     * Populated if and only if `message_type` = `TRANSCRIPT`.
     *
     * Generated from protobuf field <code>string transcript = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setTranscript($var)
    {
        GPBUtil::checkString($var, True);
        $this->transcript = $var;

        return $this;
    }

    /**
     * If `false`, the `StreamingRecognitionResult` represents an
     * interim result that may change. If `true`, the recognizer will not return
     * any further hypotheses about this piece of the audio. May only be populated
     * for `message_type` = `TRANSCRIPT`.
     *
     * Generated from protobuf field <code>bool is_final = 3;</code>
     * @return bool
     */
    public function getIsFinal()
    {
        return $this->is_final;
    }

    /**
     * If `false`, the `StreamingRecognitionResult` represents an
     * interim result that may change. If `true`, the recognizer will not return
     * any further hypotheses about this piece of the audio. May only be populated
     * for `message_type` = `TRANSCRIPT`.
     *
     * Generated from protobuf field <code>bool is_final = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setIsFinal($var)
    {
        GPBUtil::checkBool($var);
        $this->is_final = $var;

        return $this;
    }

    /**
     * The Speech confidence between 0.0 and 1.0 for the current portion of audio.
     * A higher number indicates an estimated greater likelihood that the
     * recognized words are correct. The default of 0.0 is a sentinel value
     * indicating that confidence was not set.
     * This field is typically only provided if `is_final` is true and you should
     * not rely on it being accurate or even set.
     *
     * Generated from protobuf field <code>float confidence = 4;</code>
     * @return float
     */
    public function getConfidence()
    {
        return $this->confidence;
    }

    /**
     * The Speech confidence between 0.0 and 1.0 for the current portion of audio.
     * A higher number indicates an estimated greater likelihood that the
     * recognized words are correct. The default of 0.0 is a sentinel value
     * indicating that confidence was not set.
     * This field is typically only provided if `is_final` is true and you should
     * not rely on it being accurate or even set.
     *
     * Generated from protobuf field <code>float confidence = 4;</code>
     * @param float $var
     * @return $this
     */
    public function setConfidence($var)
    {
        GPBUtil::checkFloat($var);
        $this->confidence = $var;

        return $this;
    }

    /**
     * An estimate of the likelihood that the speech recognizer will
     * not change its guess about this interim recognition result:
     * * If the value is unspecified or 0.0, Dialogflow didn't compute the
     *   stability. In particular, Dialogflow will only provide stability for
     *   `TRANSCRIPT` results with `is_final = false`.
     * * Otherwise, the value is in (0.0, 1.0] where 0.0 means completely
     *   unstable and 1.0 means completely stable.
     *
     * Generated from protobuf field <code>float stability = 6;</code>
     * @return float
     */
    public function getStability()
    {
        return $this->stability;
    }

    /**
     * An estimate of the likelihood that the speech recognizer will
     * not change its guess about this interim recognition result:
     * * If the value is unspecified or 0.0, Dialogflow didn't compute the
     *   stability. In particular, Dialogflow will only provide stability for
     *   `TRANSCRIPT` results with `is_final = false`.
     * * Otherwise, the value is in (0.0, 1.0] where 0.0 means completely
     *   unstable and 1.0 means completely stable.
     *
     * Generated from protobuf field <code>float stability = 6;</code>
     * @param float $var
     * @return $this
     */
    public function setStability($var)
    {
        GPBUtil::checkFloat($var);
        $this->stability = $var;

        return $this;
    }

    /**
     * Word-specific information for the words recognized by Speech in
     * [transcript][google.cloud.dialogflow.cx.v3.StreamingRecognitionResult.transcript].
     * Populated if and only if `message_type` = `TRANSCRIPT` and
     * [InputAudioConfig.enable_word_info] is set.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dialogflow.cx.v3.SpeechWordInfo speech_word_info = 7;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSpeechWordInfo()
    {
        return $this->speech_word_info;
    }

    /**
     * Word-specific information for the words recognized by Speech in
     * [transcript][google.cloud.dialogflow.cx.v3.StreamingRecognitionResult.transcript].
     * Populated if and only if `message_type` = `TRANSCRIPT` and
     * [InputAudioConfig.enable_word_info] is set.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dialogflow.cx.v3.SpeechWordInfo speech_word_info = 7;</code>
     * @param array<\Google\Cloud\Dialogflow\Cx\V3\SpeechWordInfo>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSpeechWordInfo($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Dialogflow\Cx\V3\SpeechWordInfo::class);
        $this->speech_word_info = $arr;

        return $this;
    }

    /**
     * Time offset of the end of this Speech recognition result relative to the
     * beginning of the audio. Only populated for `message_type` =
     * `TRANSCRIPT`.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration speech_end_offset = 8;</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getSpeechEndOffset()
    {
        return $this->speech_end_offset;
    }

    public function hasSpeechEndOffset()
    {
        return isset($this->speech_end_offset);
    }

    public function clearSpeechEndOffset()
    {
        unset($this->speech_end_offset);
    }

    /**
     * Time offset of the end of this Speech recognition result relative to the
     * beginning of the audio. Only populated for `message_type` =
     * `TRANSCRIPT`.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration speech_end_offset = 8;</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setSpeechEndOffset($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->speech_end_offset = $var;

        return $this;
    }

    /**
     * Detected language code for the transcript.
     *
     * Generated from protobuf field <code>string language_code = 10;</code>
     * @return string
     */
    public function getLanguageCode()
    {
        return $this->language_code;
    }

    /**
     * Detected language code for the transcript.
     *
     * Generated from protobuf field <code>string language_code = 10;</code>
     * @param string $var
     * @return $this
     */
    public function setLanguageCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->language_code = $var;

        return $this;
    }

}

