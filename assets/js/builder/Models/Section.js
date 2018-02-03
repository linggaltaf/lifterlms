/**
 * Section Model
 * @since    3.16.0
 * @version  3.16.0
 */
define( [ 'Collections/Lessons', 'Models/_Relationships' ], function( Lessons, Relationships ) {

	return Backbone.Model.extend( _.defaults( {

		relationships: {
			parent: {
				model: 'course',
				type: 'model',
			},
			children: {
				lessons: {
					class: 'Lessons',
					model: 'lesson',
					type: 'collection',
				},
			}
		},

		/**
		 * New section defaults
		 * @return   obj
		 * @since    3.16.0
		 * @version  3.16.0
		 */
		defaults: function() {
			return {
				id: _.uniqueId( 'temp_' ),
				lessons: [],
				order: this.collection ? this.collection.length + 1 : 1,
				parent_course: window.llms_builder.course.id,
				title: LLMS.l10n.translate( 'New Section' ),
				type: 'section',

				_expanded: false,
				_selected: false,
			};
		},

		/**
		 * Initialize
		 * @return   void
		 * @since    3.16.0
		 * @version  3.16.0
		 */
		initialize: function() {

			this.startTracking();
			this.init_relationships();

		},

		add_lesson: function( data, options ) {

			data = data || {};
			options = options || {};

			data.parent_section = this.get( 'id' );
			return this.get( 'lessons' ).add( data, options );

		},

	}, Relationships ) );

} );
