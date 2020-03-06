<<<<<<< HEAD
import { mount } from '@vue/test-utils'
import test from 'ava'
import Logo from '@/components/Logo.vue'

test('is a Vue instance', (t) => {
  const wrapper = mount(Logo)
  t.is(wrapper.isVueInstance(), true)
})
=======
import { mount } from '@vue/test-utils'
import test from 'ava'
import Logo from '@/components/Logo.vue'

test('is a Vue instance', (t) => {
  const wrapper = mount(Logo)
  t.is(wrapper.isVueInstance(), true)
})
>>>>>>> 78f73c664159341f41233d9d1aff2c31be21e3a9
