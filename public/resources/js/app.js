import { Calendar } from '@fullcalendar/core';
import dayGridPlugin from '@fullcalendar/daygrid';
import timeGridPlugin from '@fullcalendar/timegrid';
import interactionPlugin from '@fullcalendar/interaction';

document.addEventListener('DOMContentLoaded', function() {
    let calendarEl = document.getElementById('calendar');

    let calendar = new Calendar(calendarEl, {
        plugins: [dayGridPlugin, timeGridPlugin, interactionPlugin],
        initialView: 'dayGridMonth',
        headerToolbar: {
            left: 'prev,next today',
            center: 'title',
            right: 'dayGridMonth,timeGridWeek,timeGridDay'
        },
        events: '/events',
        editable: true,
        selectable: true,

        select: function(info) {
            showCreateCalendarModal(info.startStr, info.endStr);
        },

        eventDrop: function(info) {
            let event = {
                id: info.event.id,
                start: info.event.start.toISOString(),
                end: info.event.end ? info.event.end.toISOString() : null,
            };
            
            fetch(`/events/${event.id}`, {
                method: 'PUT',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                },
                body: JSON.stringify(event),
            });
        },

        eventClick: function(info) {
            const startDate = info.event.start;
            const formattedStartDate = startDate.toISOString().split('T')[0];
        
            document.getElementById('event_start').value = formattedStartDate;
        
            if (info.event.end) {
                const formattedEndDate = info.event.end.toISOString().split('T')[0];
                document.getElementById('event_end').value = formattedEndDate;
            } else {
                document.getElementById('event_end').value = ''; 
            }
        
            document.getElementById('event_title').value = info.event.title;
        
            document.getElementById('event_id').value = info.event.id;

            const modal = document.querySelector('.ModelEditCalendar');
            modal.style.display = 'block';
        },

        eventDidMount: function(info) {
            const backgroundColor = info.event.backgroundColor;
            const borderColor = info.event.borderColor;

            if (backgroundColor) {
                info.el.style.backgroundColor = backgroundColor;
            }
            if (borderColor) {
                info.el.style.borderColor = borderColor;
            }
        }
    });

    calendar.render();
    document.getElementById('search-btn').addEventListener('click', function() {
        let inputDate = document.getElementById('date-input').value;
        let dateParts = inputDate.split('-'); // Ngày định dạng dd-mm-yyyy
        if (dateParts.length === 3) {
            let formattedDate = new Date(`${dateParts[2]}-${dateParts[1]}-${dateParts[0]}`);
            if (!isNaN(formattedDate.getTime())) {
                calendar.gotoDate(formattedDate); // Chuyển lịch đến ngày tương ứng
            } else {
                alert('Invalid date format. Please enter in dd-mm-yyyy format.');
            }
        } else {
            alert('Please enter a valid date in dd-mm-yyyy format.');
        }
    });
});


function showCreateCalendarModal(startDate, endDate) {
    const modal = document.querySelector('.ModelCreateCalendar');
    
    const startDateInput = document.getElementById('start_date');
    startDateInput.value = startDate;

    const endDateInput = document.getElementById('end_date');
    endDateInput.value = endDate || startDate; 

    modal.style.display = 'block';
}




