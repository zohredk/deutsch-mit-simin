import{h}from"@stencil/core";export class PrestoVideo{constructor(){this.getRef=void 0,this.autoplay=void 0,this.src=void 0,this.preload=void 0,this.poster=void 0,this.player=void 0,this.tracks=void 0,this.playsinline=void 0,this.provider=void 0,this.videoAttributes=void 0}render(){return h("video",Object.assign({class:{"presto-player__player":!0,"plyr__video-embed":["youtube","vimeo"].includes(this.provider)},part:"video",ref:this.getRef,autoplay:this.autoplay,preload:this.preload,"data-poster":this.poster,playsinline:this.playsinline},this.videoAttributes),h("source",{src:this.src}),!!this.tracks&&!!this.tracks.length&&this.tracks.map((e=>h("track",{kind:"captions",label:(null==e?void 0:e.label)?e.label:"Captions",src:null==e?void 0:e.src,srclang:(null==e?void 0:e.srcLang)?null==e?void 0:e.srcLang:"en"}))))}static get is(){return"presto-video"}static get originalStyleUrls(){return{$:["presto-video.css"]}}static get styleUrls(){return{$:["presto-video.css"]}}static get properties(){return{getRef:{type:"unknown",mutable:!0,complexType:{original:"(elm?: HTMLVideoElement) => void",resolved:"(elm?: HTMLVideoElement) => void",references:{HTMLVideoElement:{location:"global"}}},required:!1,optional:!0,docs:{tags:[],text:""}},autoplay:{type:"boolean",mutable:!1,complexType:{original:"boolean",resolved:"boolean",references:{}},required:!1,optional:!1,docs:{tags:[],text:""},attribute:"autoplay",reflect:!1},src:{type:"string",mutable:!1,complexType:{original:"string",resolved:"string",references:{}},required:!1,optional:!1,docs:{tags:[],text:""},attribute:"src",reflect:!1},preload:{type:"string",mutable:!1,complexType:{original:"string",resolved:"string",references:{}},required:!1,optional:!1,docs:{tags:[],text:""},attribute:"preload",reflect:!1},poster:{type:"string",mutable:!1,complexType:{original:"string",resolved:"string",references:{}},required:!1,optional:!1,docs:{tags:[],text:""},attribute:"poster",reflect:!1},player:{type:"any",mutable:!1,complexType:{original:"any",resolved:"any",references:{}},required:!1,optional:!1,docs:{tags:[],text:""},attribute:"player",reflect:!1},tracks:{type:"unknown",mutable:!1,complexType:{original:"{ label: string; src: string; srcLang: string }[]",resolved:"{ label: string; src: string; srcLang: string; }[]",references:{}},required:!1,optional:!1,docs:{tags:[],text:""}},playsinline:{type:"boolean",mutable:!1,complexType:{original:"boolean",resolved:"boolean",references:{}},required:!1,optional:!1,docs:{tags:[],text:""},attribute:"playsinline",reflect:!1},provider:{type:"string",mutable:!1,complexType:{original:"string",resolved:"string",references:{}},required:!1,optional:!1,docs:{tags:[],text:""},attribute:"provider",reflect:!1},videoAttributes:{type:"unknown",mutable:!1,complexType:{original:"object",resolved:"object",references:{}},required:!1,optional:!1,docs:{tags:[],text:""}}}}}