<template>
    <div>
        <FullCalendar
        class=''
        :options='calendarOptions'
      >
        <!-- <template v-slot:eventContent='arg'>
          <b>{{ arg.timeText }}</b>
          <i>{{ arg.event.title }}</i>
        </template> -->
      </FullCalendar>
    </div>
    
</template>

<script>
import FullCalendar from '@fullcalendar/vue'
import dayGridPlugin from '@fullcalendar/daygrid'
import interactionPlugin from '@fullcalendar/interaction'
import listPlugin from '@fullcalendar/list'
export default {
    components: {
    FullCalendar // make the <FullCalendar> tag available
  },
  data: function() {
    return {
      calendarOptions: {
        plugins: [
          dayGridPlugin,
          listPlugin,
          interactionPlugin // needed for dateClick
        ],
        headerToolbar: {
          left: 'prev,next,today',
          center: 'title',
          right: 'listDay, listWeek'
        },
        initialView: 'listDay',
        views: {
        listDay: { buttonText: 'list day' },
        listWeek: { buttonText: 'list week' }
        },
        selectable: true,
        selectMirror: true,
        dayMaxEvents: true,
        weekends: true,
        eventClick: this.handleEventClick,
        eventsSet: this.handleEvents
        /* you can update a remote database when these fire:
        eventAdd:
        eventChange:
        eventRemove:
        */
      },
      currentEvents: []
    }
  },
  methods: {
      handleEventClick() {
      alert('here are the details of your order')
    },

  }
}
</script>

<style scoped>
.fc .fc-toolbar-title {
    font-size: 1em;
} 
</style>


