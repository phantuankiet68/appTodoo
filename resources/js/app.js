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
            // Hiển thị modal để thêm sự kiện mới
            showCreateCategoryModal(info.startStr, info.endStr);
        },

        // Cập nhật sự kiện
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

        // Xoá sự kiện
        eventClick: function(info) {
            if (confirm('Do you want to delete this event?')) {
                fetch(`/events/${info.event.id}`, {
                    method: 'DELETE',
                    headers: {
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                    },
                })
                .then(() => {
                    info.event.remove();
                });
            }
        }
    });

    calendar.render();
});

// Hàm hiển thị modal để thêm mới sự kiện
function showCreateCategoryModal(startDate, endDate) {
    const modal = document.querySelector('.ModelCreateCategory');
    
    // Cập nhật các trường dữ liệu với ngày bắt đầu và ngày kết thúc
    const dateInput = document.createElement('input');
    dateInput.type = 'hidden';
    dateInput.name = 'start';
    dateInput.value = startDate;

    const endInput = document.createElement('input');
    endInput.type = 'hidden';
    endInput.name = 'end';
    endInput.value = endDate;

    const form = modal.querySelector('form');
    form.appendChild(dateInput);
    form.appendChild(endInput);
    
    // Hiển thị modal
    modal.style.display = 'block';
}

// Hàm đóng modal
function closeCreateCategoryFormPopup() {
    const modal = document.querySelector('.ModelCreateCategory');
    modal.style.display = 'none';
}
