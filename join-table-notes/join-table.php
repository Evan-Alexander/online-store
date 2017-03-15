<?php
    // Many-to-many JOIN TABLE: CREATE TABLE categories_tasks (id serial PRIMARY KEY, category_id int, task_id int);

    FOR TASKS:

    static function getAll()
        {
            $returned_tasks = $GLOBALS['DB']->query("SELECT * FROM tasks;");
            $tasks = array();
            foreach($returned_tasks as $task) {
                $description = $task['description'];
                $id = $task['id'];
                $new_task = new Task($description, $id);
                array_push($tasks, $new_task);
            }
            return $tasks;
        }

        static function deleteAll()
        {
          $GLOBALS['DB']->exec("DELETE FROM tasks;");
        }

        static function find($search_id)
        {
            $found_task = null;
            $tasks = Task::getAll();
            foreach($tasks as $task) {
                $task_id = $task->getId();
                if ($task_id == $search_id) {
                  $found_task = $task;
                }
            }
            return $found_task;
        }
        function update($new_description)
        {
            $GLOBALS['DB']->exec("UPDATE tasks SET description = '{$new_description}' WHERE id = {$this->getId()};");
            $this->setDescription($new_description);
        }

        function delete()
        {
            $GLOBALS['DB']->exec("DELETE FROM tasks WHERE id = {$this->getId()};");
            $GLOBALS['DB']->exec("DELETE FROM categories_tasks WHERE task_id = {$this->getId()};");
        }



        JOIN TABLE SPECIFIC: FUNCTIONS

        function addCategory($category)
        {
            $GLOBALS['DB']->exec("INSERT INTO categories_tasks (category_id, task_id) VALUES ({$category->getId()}, {$this->getId()});");
        }

        function getCategories()
        {
            $query = $GLOBALS['DB']->query("SELECT category_id FROM categories_tasks WHERE task_id = {$this->getId()};");
            $category_ids = $query->fetchAll(PDO::FETCH_ASSOC);

            $categories = array();
            foreach($category_ids as $id) {
                $category_id = $id['category_id'];
                $result = $GLOBALS['DB']->query("SELECT * FROM categories WHERE id = {$category_id};");
                $returned_category = $result->fetchAll(PDO::FETCH_ASSOC);

                $name = $returned_category[0]['name'];
                $id = $returned_category[0]['id'];
                $new_category = new Category($name, $id);
                array_push($categories, $new_category);
            }
            return $categories;
        }
        FOR CATEGORY:

        function save()
        {
              $GLOBALS['DB']->exec("INSERT INTO categories (name) VALUES ('{$this->getName()}');");
              $this->id = $GLOBALS['DB']->lastInsertId();
        }

        function update($new_name)
        {
            $GLOBALS['DB']->exec("UPDATE categories SET name = '{$new_name}' WHERE id = {$this->getId()};");
            $this->setName($new_name);
        }

        function delete()
        {
            $GLOBALS['DB']->exec("DELETE FROM categories WHERE id = {$this->getId()};");
            $GLOBALS['DB']->exec("DELETE FROM categories_tasks WHERE category_id = {$this->getId()};");
        }

        static function getAll()
        {
            $returned_categories = $GLOBALS['DB']->query("SELECT * FROM categories;");
            $categories = array();
            foreach($returned_categories as $category) {
                $name = $category['name'];
                $id = $category['id'];
                $new_category = new Category($name, $id);
                array_push($categories, $new_category);
            }
            return $categories;
        }

        static function deleteAll()
        {
          $GLOBALS['DB']->exec("DELETE FROM categories;");
        }

        static function find($search_id)
        {
            $found_category = null;
            $categories = Category::getAll();
            foreach($categories as $category) {
                $category_id = $category->getId();
                if ($category_id == $search_id) {
                  $found_category = $category;
                }
            }
            return $found_category;
        }

        JOIN TABLE SPECIFIC:

        function addTask($task)
        {
            $GLOBALS['DB']->exec("INSERT INTO categories_tasks (category_id, task_id) VALUES ({$this->getId()}, {$task->getId()});");
        }

        function getTasks()
        {
            $query = $GLOBALS['DB']->query("SELECT task_id FROM categories_tasks WHERE category_id = {$this->getId()};");
            $task_ids = $query->fetchAll(PDO::FETCH_ASSOC);

            $tasks = array();
            foreach($task_ids as $id) {
                $task_id = $id['task_id'];
                $result = $GLOBALS['DB']->query("SELECT * FROM tasks WHERE id = {$task_id};");
                $returned_task = $result->fetchAll(PDO::FETCH_ASSOC);

                $description = $returned_task[0]['description'];
                $id = $returned_task[0]['id'];
                $new_task = new Task($description, $id);
                array_push($tasks, $new_task);
            }
            return $tasks;
        }

?>
