<template>
  <div>
    <h1>Todo List (Laravel + Vue)</h1>

    <input v-model="newTodo" placeholder="Enter todo" />
    <button @click="addTodo">Add</button>

    <ul>
      <li
        v-for="todo in todos"
        :key="todo.id"
        style="display: flex; align-items: center; gap: 10px; margin: 6px 0"
      >
        <span v-if="!todo.editing">{{ todo.description }}</span>

        <input v-if="todo.editing" v-model="todo.description" />

        <button @click="editTodo(todo)" v-if="!todo.editing">Edit</button>
        <button @click="saveTodo(todo)" v-if="todo.editing">Save</button>
        <button @click="deleteTodo(todo.id)">Delete</button>
      </li>
    </ul>
  </div>
</template>

<script>
import axios from "axios";

export default {
  data() {
    return {
      todos: [],
      newTodo: "",
    };
  },

  methods: {
    fetchTodos() {
      axios.get("http://127.0.0.1:8000/api/todos").then((res) => {
        this.todos = res.data.map((todo) => ({
          ...todo,
          editing: false,
        }));
      });
    },

    addTodo() {
      if (this.newTodo === "") return;

      axios
        .post("http://127.0.0.1:8000/api/todos", {
          description: this.newTodo,
        })
        .then(() => {
          this.newTodo = "";
          this.fetchTodos();
        });
    },

    editTodo(todo) {
      todo.editing = true;
    },

    saveTodo(todo) {
      axios
        .put(`http://127.0.0.1:8000/api/todos/${todo.id}`, {
          description: todo.description,
        })
        .then(() => {
          todo.editing = false;
        });
    },

    deleteTodo(id) {
      axios.delete(`http://127.0.0.1:8000/api/todos/${id}`).then(() => {
        this.fetchTodos();
      });
    },
  },

  mounted() {
    this.fetchTodos();
  },
};
</script>
