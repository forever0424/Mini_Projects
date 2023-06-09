import mockAPI from "../../data/mockAPI";

const addGoalActionCreator = ({ id, text }) => {
  return {
    type: "ADD_GOAL",
    payload: {
      id,
      text,
    },
  };
};

const deleteGoalActionCreator = (id) => {
  return {
    type: "DELETE_GOAL",
    payload: {
      id,
    },
  };
};

const recieveGoalsActionCreator = (goals) => {
  return {
    type: "RECIEVE_GOALS",
    payload: {
      goals,
    },
  };
};

const asyncRecieveGoals = () => {
  return async (dispatch) => {
    const goals = await mockAPI.getGoals();
    dispatch(recieveGoalsActionCreator(goals));
  };
};

const asyncAddGoal = (text) => {
  return async (dispatch) => {
    const { id } = await mockAPI.addGoal(text);
    dispatch(addGoalActionCreator({ id, text }));
  };
};

const asyncDeleteGoal = (id) => {
  return async (dispatch) => {
    await mockAPI.deleteGoal(id);
    dispatch(deleteGoalActionCreator(id));
  };
};

export { addGoalActionCreator, deleteGoalActionCreator, recieveGoalsActionCreator, asyncAddGoal, asyncDeleteGoal, asyncRecieveGoals };
