import {parseTimestamp} from "@/utils/dates";
import {ContentType, USERS} from "@/constants/code-constants";


export function formatServerMessage(messageFromServer, roomId){
    let avatarValue = '';

    if(roomId=== ContentType.FUN_FACTS){

        avatarValue = "/images/fun-fact.png"
    }

    if(roomId === ContentType.THREE_AM_JOKES){
        avatarValue = "/images/joking/png"
    }

    if(roomId === ContentType.QUOTES){
        avatarValue = "/images/quote.png"
    }

    if(roomId === ContentType.PUNS_AND_JOKES){

        avatarValue = "/images/cooking.png"
    }

    return  {
        _id: messageFromServer._id,
        content: messageFromServer.description,
        senderId: USERS.CHAT_BOT,
        username: 'John Doe',
        date: parseTimestamp(new Date(), 'DD MMMM YYYY'),
        timestamp: parseTimestamp(new Date(), 'HH:mm'),
        avatar: avatarValue,
        roomId: roomId,
        saved: true,
        chatGptMessage:false,
        distributed: true,
        seen: true,
        disableActions: false,
        disableReactions: false,
        modify:false,
        reactions: messageFromServer.reactions
    }
}

export function formatChatGptMessage(messageFromChatGpt ,roomId){
    return  {
        _id: messageFromChatGpt._id,
        content: messageFromChatGpt.content,
        senderId: USERS.CHAT_BOT,
        username: 'John Doe',
        date: parseTimestamp(new Date(), 'DD MMMM YYYY'),
        timestamp: parseTimestamp(new Date(), 'HH:mm'),
        avatar: "/images/chatgpt.png",
        roomId: roomId,
        chatGptMessage:true,
        saved: true,
        distributed: true,
        seen: true,
        disableActions: false,
        disableReactions: true,
        modify:false,
    }
}
