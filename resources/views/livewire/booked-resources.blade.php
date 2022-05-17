<div>
  <div id='calendar-container' wire:ignore>
    <div id='calendar'></div>
  </div>
</div>
@push('scripts')
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@5.3.1/main.min.js'></script>
     
    <script>
        document.addEventListener('livewire:load', function() {
            var Calendar = FullCalendar.Calendar;
            var Draggable = FullCalendar.Draggable;
            var calendarEl = document.getElementById('calendar');
            var checkbox = document.getElementById('drop-remove');
            var data =   @this.events;
            var calendar = new Calendar(calendarEl, {
            headerToolbar: {left: 'prev,next today',
            center: 'title',
            right: 'dayGridMonth,timeGridWeek,timeGridDay,listMonth'},
            events: [ 
            @foreach($events as $event)
                {
                title:'{{ $event->title . ' - '. $event->resource_title . ' - '. $event->user_name}}',
                description:'{{ $event->location }}',
                start:'{{ $event->start_date }}',
                end:'{{ $event->end_date }}',
                backgroundColor:'{{ $event->background_color }}',
                textColor:'{{ $event->text_color }}',
                extendedProps: {
                    id: '{{ $event->id }}'
                    }, 
                },
            @endforeach
            ],
            editable: true,
            selectable: true,
            displayEventTime: false,
            droppable: true, // this allows things to be dropped onto the calendar
            drop: function(info) {
                // is the "remove after drop" checkbox checked?
                if (checkbox.checked) {
                // if so, remove the element from the "Draggable Events" list
                info.draggedEl.parentNode.removeChild(info.draggedEl);
                }
            },
            eventDrop: info => @this.eventDrop(info.event, info.oldEvent),
            dateClick: function(info) {
                window.Livewire.emitTo('in-dev-modal', 'show')
            },
            loading: function(isLoading) {
                    if (!isLoading) {
                        // Reset custom events
                        this.getEvents().forEach(function(e){
                            if (e.source === null) {
                                e.remove();
                            }
                        });
                    }
                }
            });
            calendar.render();
            @this.on(`refreshCalendar`, () => {
                calendar.refetchEvents()
            });
        });
    </script>
    <link href='https://cdn.jsdelivr.net/npm/fullcalendar@5.3.1/main.min.css' rel='stylesheet' />
@endpush