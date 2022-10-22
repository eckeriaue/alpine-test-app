
<template id="test_message">

  <div style="color: red; font-family: sans-serif;">
    <p>test message <span style="font-weight: bold;">bold text</span> 
    <slot></slot>
  </p>
  </div>

</template>
<template id="see-more">
  
  <div x-data="{open: false}">
    <button x-on:click="open = !open" >click</button>
    <div x-show="open" x-transition.duration.500ms> <slot> </slot> </div>
  </div>
</template>