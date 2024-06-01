<template>
  <div v-if="meetingId">
    <iframe
      :src="jitsiUrl"
      allow="camera; microphone; fullscreen; display-capture"
      style="width: 100%; height: 700px; border: 0px;"
    ></iframe>
  </div>
</template>

<script>
export default {
  props: {
    meetingId: {
      type: String,
      required: true,
    },
  },
  computed: {
    jitsiUrl() {
      return `https://meet.jit.si/${this.meetingId}`;
    },
  },
};
</script>
