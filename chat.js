// Sample responses for the food order chatbot
const responses = {
    hi: "Hi! Welcome to Yummy Bites 🍽️ What delicious food are you craving today?",
    hello: "Hello! Welcome to Yummy Bites 🍔 What would you like to eat?",
    menu: "Here's our menu:\n🍕 Pizza - ₹299\n🍔 Burger - ₹149\n🍝 Pasta - ₹199\n🍛 Biryani - ₹249\n🍜 Noodles - ₹179\n🥪 Sandwich - ₹129\n🥗 Salad - ₹109\n🍦 Ice Cream - ₹99\n🥤 Cold Drink - ₹49",
    pizza: "Our delicious Cheese Pizza is available for ₹299. Would you like to place an order?",
    burger: "Our juicy Chicken Burger is ₹149. Add fries for ₹49 more!",
    pasta: "Creamy Alfredo or Spicy Arrabbiata – Pasta for ₹199 only!",
    biryani: "Authentic Hyderabadi Biryani at ₹249 per serving. Comes with raita and salad.",
    affordable: "Here are our budget-friendly bites:\n🥤 Cold Drink - ₹49\n🍦 Ice Cream - ₹99\n🥗 Salad - ₹109",
    order: "To place an order, click the 'Order Now' button on our website or go to the ordering section.",
    default: "I'm not sure I got that 🤔 Could you try asking something else?",
  };
  
  // Function to add a message to the chat
  function addMessage(message, sender) {
    const chatBody = document.getElementById("chat-body");
    const messageElement = document.createElement("div");
    messageElement.classList.add(sender);
    messageElement.textContent = message;
    chatBody.appendChild(messageElement);
    chatBody.scrollTop = chatBody.scrollHeight; // Auto-scroll
  }
  
  // Show possible questions
  function showQuestions() {
    const questions = [
      "Hi",
      "Hello",
      "Menu",
      "Pizza",
      "Burger",
      "Pasta",
      "Biryani",
      "Affordable",
      "Order"
    ];
    const message = "Here are some things you can ask me:\n" + questions.map(q => `- ${q}`).join("\n");
    addMessage(message, "bot");
  }
  
  // Handle user input
  document.getElementById("send-button").addEventListener("click", () => {
    const userInput = document.getElementById("user-input").value.trim();
    if (userInput) {
      addMessage(userInput, "user");
      document.getElementById("user-input").value = "";
  
      if (userInput.toLowerCase() === "show questions") {
        showQuestions();
      } else {
        const response = responses[userInput.toLowerCase()] || responses.default;
        setTimeout(() => addMessage(response, "bot"), 400); // Simulate delay
      }
    }
  });
  
  // Show commands button
  document.getElementById("show-commands").addEventListener("click", showQuestions);
  
  // Initial welcome message
  addMessage("👋 Welcome to Yummy Bites! Type 'show questions' or click 'Show Questions' to get started.", "bot");
  