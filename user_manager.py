import json
import os

DATA_FILE = "users.json"

# Load users from JSON file
def load_users():
    if not os.path.exists(DATA_FILE):
        return []
    with open(DATA_FILE, "r") as f:
        return json.load(f)

# Save users to JSON file
def save_users(users):
    with open(DATA_FILE, "w") as f:
        json.dump(users, f, indent=4)

# Add a new user
def add_user():
    name = input("Enter name: ")
    age = int(input("Enter age: "))
    skills = input("Enter skills (comma separated): ").split(",")
    skills = [skill.strip() for skill in skills]

    users = load_users()
    users.append({"name": name, "age": age, "skills": skills})
    save_users(users)
    print("User added!")

# Display all users
def show_users():
    users = load_users()
    if not users:
        print("No users found.")
    else:
        for i, user in enumerate(users, 1):
            print(f"{i}. {user['name']} ({user['age']} years old) - Skills: {', '.join(user['skills'])}")

# Main menu
def main():
    while True:
        print("\n1. Add User\n2. Show Users\n3. Exit")
        choice = input("Choose an option: ")

        if choice == "1":
            add_user()
        elif choice == "2":
            show_users()
        elif choice == "3":
            break
        else:
            print("Invalid option!")

if __name__ == "__main__":
    main()
