const {test, expect} = require('@playwright/test')
// const {Hello, HelloWorld} =  require('./demo/hello')
// import { Hello, HelloWorld } from './demo/hello'

// console.log(Hello().concat(" David"));

test('My First Test', async ({ page }) => {
    await page.goto('http://127.0.0.1:8000/');
    await expect(page).toHaveTitle(/Laravel/);
  });