<?php
/**
 * Single Quiz: Next Question button
 * @since    1.0.0
 * @version  [version]
 */

if ( ! defined( 'ABSPATH' ) ) { exit; }
global $post;
$question = new LLMS_Question( $args['question_id'] );
if ( ! $question ) {
	$question = new LLMS_Question( $post->ID );
}

$options = $question->get_options();
$student = llms_get_student( null );
$attempt = $student->quizzes()->get_current_attempt( $args['quiz_id'] );

$btn_text = __( 'Next Question','lifterlms' );
$complete = '';
if ( $attempt->get_question_order( $args['question_id'] ) === $attempt->get_count( 'questions' ) ) {
	 $btn_text = __( 'Complete Quiz','lifterlms' );
	 $complete = ' llms-button-quiz-complete';
}
?>

<input id="llms_answer_question" type="submit" class="button llms-button-action<?php echo $complete; ?>" name="llms_answer_question" value="<?php echo $btn_text; ?>" />
<input type="hidden" name="action" value="llms_answer_question" />
<?php wp_nonce_field( 'llms_answer_question' ); ?>
