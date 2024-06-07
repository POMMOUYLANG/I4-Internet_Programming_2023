const {test, expect} = require("@playwright/test");
import { name, pass, email, login } from './value'

const task = "Laundry";
const des = "Wash all the clothes";

test("Set Task Successful", async ({page}) => {
    await login(page, 'http://127.0.0.1:8000/', email, pass);

    await expect(page.getByText("You are logged in!")).toBeVisible();

    await page.getByRole("button", {name: "Task"}).click();
    await page.getByRole("link", {name: "Tasks Overview"}).click();
    
    const row = await page.locator('tr', {hasText: task});

    if(row){
        await row.locator(".fa-pencil").first().click();
    }else{
        const row2 = await page.locator('tr', {hasText: task + ' ' + "_Updated"});
        await row2.locator(".fa-pencil").first().click();
    }


    // await page.getByRole("checkbox", {name: "Status Complete"}).click();
    const check  = await page.getByRole("checkbox", {name: "Status Complete"}).isChecked();

    if(!check){
        await page.getByRole("checkbox", {name: "Status Complete"}).click();
    }

    await page.getByRole("button", {name: "Save"}).click();

    await expect(page.getByText("Task Updated", {exact: true})).toBeVisible();
})

test("Set Task Uncompleted", async ({page}) => {
    await login(page, 'http://127.0.0.1:8000/', email, pass);

    await expect(page.getByText("You are logged in!")).toBeVisible();

    await page.getByRole("button", {name: "Task"}).click();
    await page.getByRole("link", {name: "Tasks Overview"}).click();
    
    const row = await page.locator('tr', {hasText: task});

    if(row){
        await row.locator(".fa-pencil").first().click();
    }else{
        const row2 = await page.locator('tr', {hasText: task + ' ' + "_Updated"});
        await row2.locator(".fa-pencil").first().click();
    }


    // await page.getByRole("checkbox", {name: "Status Complete"}).click();
    const check  = await page.getByRole("checkbox", {name: "Status Complete"}).isChecked();

    if(check){
        await page.getByRole("checkbox", {name: "Status Complete"}).click();
    }

    await page.getByRole("button", {name: "Save"}).click();

    await expect(page.getByText("Task Updated", {exact: true})).toBeVisible();
})