export const asyncQuerySelector = async (node, query) => {
    try {
      return await (query ? node.querySelector(query) : node)
    } catch (error) {
      console.error(`Cannot find ${query ? `${query} in`: ''} ${node}.`, error);
      return null;
    }
  };



  