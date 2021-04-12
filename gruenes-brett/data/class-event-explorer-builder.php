<?php
/**
 * Defines how the event explorer view is rendered.
 *
 * @package GruenesBrett
 */

if ( ! verify_community_calendar_loaded() ) {
    return;
}

/**
 * Creates calendar tables for each month.
 */
class Event_Explorer_Builder extends Comcal_Default_Display_Builder {

    /**
     * Singleton instance of this class.
     *
     * @var $instance Singleton instance of this class.
     */
    private static ?Event_Explorer_Builder $instance = null;

    /**
     * Instantiates the Event_Explorer_Builder singleton and loads the
     * events from the database.
     */
    public static function get_instance() {
        if ( null !== static::$instance ) {
            return static::$instance;
        }

        $events_iterator = Common_Data::get_events_iterator();

        static::$instance = self::create_display( static::class, $events_iterator );
        return static::$instance;
    }

    protected function __construct( $earliest_date = null, $latest_date = null ) {
        parent::__construct( $earliest_date, $latest_date );
        $this->event_renderer = new Explorer_Event_Renderer();
    }
}
