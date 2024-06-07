const {test, expect} = require('@playwright/test')
import { name, pass, email, login } from './value'

const task = "Laundry";
const des = "Wash all the clothes";


//CRUD001
test('Create new task', async ({page}) => {

    await login(page, 'http://127.0.0.1:8000/', email, pass);

    await expect(page.getByText("You are logged in!")).toBeVisible();

    await page.getByRole("button", {name: "Tasks"}).click();
    await page.getByRole('link', {name: "Create Task"}).click();

    await page.getByRole('textbox', {name: "Task Name"}).fill(task);
    await page.getByRole('textbox', {name: "Description"}).fill(des);
    await page.getByRole('button', {name: "Create Task"}).click();

    await expect(page.getByText("Task created", {exact: true})).toBeVisible();
})

//CRUD002
test("Update Task", async ({page}) => {
    await login(page, 'http://127.0.0.1:8000/', email, pass);

    await expect(page.getByText("You are logged in!")).toBeVisible();

    await page.getByRole("button", {name: "Task"}).click();
    await page.getByRole("link", {name: "Tasks Overview"}).click();
    
    const row = await page.locator('tr', {hasText: task});

    await row.locator(".fa-pencil").first().click();

    // await page.locator('.fa-pencil').nth(1).dblclick();

    await page.getByRole("textbox", {name: "Task Name"}).fill(task + "_Updated");
    await page.getByRole("textbox", {name: "Task Description"}).fill(des + "_Updated");

    await page.getByRole("button", {name: "Save Changes"}).click();

    await expect(page.getByText("Task Updated", {exact: true})).toBeVisible();
})

//CRUD003
test("Delete Task", async ({page}) => {
    await login(page, 'http://127.0.0.1:8000/', email, pass);

    await expect(page.getByText("You are logged in!")).toBeVisible();

    await page.getByRole("button", {name: "Task"}).click();
    await page.getByRole("link", {name: "Tasks Overview"}).click();
    
    const row = await page.locator('tr', {hasText: task+"_Updated"});

    await row.locator(".fa-pencil").first().click();

    // await page.locator('.fa-pencil').nth(1).dblclick();

    await page.getByRole("button", {name: "Delete"}).click();

    await expect(page.getByText("Task Deleted", {exact: true})).toBeVisible();
})