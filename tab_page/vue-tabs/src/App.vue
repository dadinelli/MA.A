<script setup>
import Tab from './components/Tabs.vue';
import TabsWrapper from './components/TabsWrapper.vue';
import HomeForm from './components/HomeForm.vue';
</script>

<template>
  <TabsWrapper>
    <Tab title="Tab 1"><HomeForm></HomeForm></Tab>
    <Tab title="Tab 2">Tab 2</Tab>
    <Tab title="Tab 3">Tab 3</Tab>
    <Tab title="Tab 4">Tab 4</Tab>
  </TabsWrapper>
</template>
