import{getEventMeta,track_event,toggle_mark_complete,do_ajax_completion}from"./helper";export const onPauseVideo=e=>{const t=e.detail.plyr;let o=getEventMeta(t);track_event("paused",o)};export const onPlayingVideo=e=>{const t=e.detail.plyr;let o=getEventMeta(t),n=o.ts<1?"started":"played";track_event(n,o)};export const onEndedVideo=(e,t,o)=>{const n=e.detail.plyr;let a=getEventMeta(n);track_event("ended",a),do_ajax_completion(t,o),toggle_mark_complete(!0)};export default function(e){var t={},o=llms?.tracking?.getSettings()||null;o?.av&&(t=o.av),t.require_video_completion&&!t.video_completed&&toggle_mark_complete(!1);let n=jQuery(".presto-block-video");e.on("pause",onPauseVideo),e.on("playing",onPlayingVideo),e.on("ended",(e=>onEndedVideo(e,n,t)))}