import { useState } from "react";

const FAQ = () => {
  const [activeIndex, setActiveIndex] = useState(0);

  const faqData = [
    {
      id: 1,
      question: "I want to track my order",
      answer: `To track your order, you will need to have the tracking number or 
              order ID provided by the seller or shipping carrier. Once you have 
              this information, you can usually track your order online by visiting 
              the carrier's website and entering the tracking number or order ID 
              in the designated tracking field.`,
    },
    {
      id: 2,
      question: "I want to manage my order",
      answer: `
        <ul>
          <li>Check your order confirmation email or account: This should contain information about your order, including the expected delivery date, tracking number (if applicable), and contact information for the seller.</li>
          <li>Contact the seller: If you have any questions about your order or need to make changes, the best way to do so is to contact the seller directly. You can typically find their contact information on their website or in your order confirmation email.</li>
          <li>Check the order status: Many online retailers provide a way for you to check the status of your order online. This can give you information about when your order was shipped, when it's expected to arrive, and any tracking information.</li>
          <li>Make changes to your order: Depending on the seller's policies, you may be able to make changes to your order, such as adding or removing items, changing the shipping address, or canceling the order altogether. Contact the seller to see if this is possible.</li>
        </ul>`,
    },
    {
      id: 3,
      question: "I did not receive Instant Cashback",
      answer: `
        <ul>
          <li>What type of purchase did you make?</li>
          <li>From which website or store did you make the purchase?</li>
          <li>Did you receive any confirmation or receipt for your purchase?</li>
          <li>Did you check the terms and conditions of the cashback offer before making the purchase?</li>
          <li>Have you contacted the website or store's customer support regarding the issue?</li>
        </ul>`,
    },
    {
      id: 4,
      question: "I am unable to pay using wallet",
      answer: `
        <ul>
          <li>What type of purchase did you make?</li>
          <li>From which website or store did you make the purchase?</li>
          <li>Did you receive any confirmation or receipt for your purchase?</li>
          <li>Did you check the terms and conditions of the cashback offer before making the purchase?</li>
          <li>Have you contacted the website or store's customer support regarding the issue?</li>
        </ul>`,
    },
    {
      id: 5,
      question: "I want help with returns & refunds",
      answer: `
        <ul>
          <li>What type of purchase did you make?</li>
          <li>From which website or store did you make the purchase?</li>
          <li>Did you receive any confirmation or receipt for your purchase?</li>
          <li>Did you check the terms and conditions of the cashback offer before making the purchase?</li>
          <li>Have you contacted the website or store's customer support regarding the issue?</li>
        </ul>`,
    },
  ];

  return (
    <div>
      <section className="page-head-section">
        <div className="container page-heading">
          <h2 className="h3 mb-3 text-white text-center">FAQ</h2>
        </div>
      </section>

      {/* FAQ Section */}
      <section className="section-b-space">
        <div className="container">
          <div className="faq-title">
            <h2>Frequently Asked Questions</h2>
          </div>
          <div className="row g-4">
            <div className="col-xl-4">
              <div className="side-img">
                <img
                  className="img-fluid img"
                  src="assets/images/faq.svg"
                  alt="faq"
                />
              </div>
            </div>
            <div className="col-xl-8">
              <div
                className="accordion accordion-flush help-accordion"
                id="accordionFlushExample"
              >
                {faqData.map(({ id, question, answer }) => (
                  <div className="accordion-item" key={id}>
                    <h2 className="accordion-header">
                      <button
                        className="accordion-button collapsed"
                        type="button"
                        // data-bs-toggle="collapse"
                        // data-bs-target={`#flush-collapse${id}`}
                        // aria-expanded="false"
                        // aria-controls={`flush-collapse${id}`}
                        data-bs-toggle="collapse"
                        aria-expanded={activeIndex === id ? "true" : "false"}
                        aria-controls={`flush-collapse${id}`}

                        onClick={() => setActiveIndex(id)}
                      >
                        {question}
                      </button>
                    </h2>
                    <div
                      id={`flush-collapse${id}`}
                      className={`accordion-collapse  ${
                        activeIndex === id ? "show" : "collapse"
                      }`}
                      data-bs-parent="#accordionFlushExample"
                    >
                      <div
                        className="accordion-body"
                        dangerouslySetInnerHTML={{ __html: answer }}
                      />
                    </div>
                  </div>
                ))}
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
  );
};

export default FAQ;
