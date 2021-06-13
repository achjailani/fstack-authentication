import Axios from "axios";

const uri = Axios.create({
  baseURL: "http://127.0.0.1:8000/api/v1",
});

const auth = {
  login: (request) => {
    return uri.post("/login", {
      email_or_username: request.login,
      password: request.password,
    });
  },
  register: (request) => {
    return uri.post("/login", {
      name: request.name,
      email: request.email,
      username: request.username,
      password: request.password,
      confirm_password: request.confirm_password,
    });
  },
};

const user = {
  getAll: () => {
    return uri.get("/users");
  },
  find: (id) => {
    return uri.get(`/users/show/${id}`);
  },
  update: (request, id) => {
    return uri.put(`/users/update/${id}`, {
      name: request.name,
      email: request.email,
      username: request.username,
      password: request.password,
      confirm_password: request.confirm_password,
    });
  },
  delete: () => {
    return uri.delete("/users/delete");
  },
};
module.exports = { auth, user };
